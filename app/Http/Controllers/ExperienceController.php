<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $exps = Experience::where('user_id', auth()->id())->get();

        return view('admin.experience.index', ['exps' => $exps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'company_name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'exp_start' => 'required|date|max:255',
                'exp_end' => 'nullable|date|max:255',
                'exp_description' => 'nullable|string',
            ]);
            

            Experience::create([
                'user_id' => auth()->id(),
                'company_name' => $request->company_name,
                'position' => $request->position,
                'exp_start' => $request->exp_start,
                'exp_end' => $request->exp_end,
                'exp_description' => $request->exp_description,
            ]);

            return redirect()->route('experience.index')->with('success','Created successfully'); 
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exp = Experience::Where('id', $id)->where('user_id', Auth()->id())->firstOrFail();
        return view('admin.experience.view',['exp'=> $exp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experience::Where('id', $id)->where('user_id', Auth()->id())->firstOrFail();
        return view('admin.experience.edit',['experience'=> $experience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'exp_start' => 'required|string|max:255',
            'exp_end' => 'nullable|string|max:255',
            'exp_description' => 'nullable|string',
        ]);
        
        $experience = Experience::where('id', $id)->where('user_id',auth()->id());
        $experience->update([
            'user_id' => auth()->id(),
            'company_name' => $request->company_name,
            'position' => $request->position,
            'exp_start' => $request->exp_start,
            'exp_end' => $request->exp_end,
            'exp_description' => $request->exp_description,
        ]);

        return redirect()->route('experience.index')->with('success','Updated successfully'); 
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Experience::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $education->delete();
        return redirect()->route('experience.index')->with('error','Deleted successfully');
    }
}
