<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Validation\Rule;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $languages = Language::where('user_id', auth()->id())->get();
        
        return view('admin.language.index', ['languages' => $languages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'language_name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('languages')->where(function ($query){
                        return $query->where('user_id', auth()->id());
                    }),
                ],
            ]);
            
        
            Language::create([
                'user_id' => auth()->id(),
                'language_name' => $request->language_name,
            ]);
        
            return redirect()->route('language.index')->with('success','Created successfully'); 

        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $language = Language::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $languages = Language::where('user_id', auth()->id())->get();
        return view('admin.Language.index',['lang'=>$language, 'languages'=>$languages]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'language_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('languages')->where(function ($query) use ($request, $id) {
                    return $query->where('user_id', auth()->id())
                        ->where('id', '<>', $id);
                }),
            ],
        ]);

        $language = Language::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $language->user_id = auth()->id();
        $language->language_name = $request->language_name;
        $language->save();

        return redirect()->route('language.index')->with('success','Updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Language::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $education->delete();
        return redirect()->route('language.index')->with('success','Deleted successfully');
    }
}
