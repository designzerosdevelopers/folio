<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Validation\Rule;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degrees = Education::where('user_id', auth()->id())->get();
        return view('admin.education.index', ['degrees' => $degrees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'degree_title' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('educations')->where(function ($query) {
                        return $query->where('user_id', auth()->id());
                    }),
                ],
                'institute' => ['nullable', 'string', 'max:255'],
                'degree_start' => ['nullable', 'string', 'max:255'],
                'continue' => ['nullable', 'string', 'max:255'],
                'degree_end' => ['nullable','string','max:255',],
                'degree_description' => ['nullable', 'string'],
            ]);

            $data = [
                'user_id' => auth()->id(),
                'degree_title' => $request->degree_title,
                'institute' => $request->institute,
                'degree_start' => $request->degree_start,
                'degree_description' => $request->degree_description,
            ];
            

            $data['degree_end'] = $request->filled('continue') ? null : $request->degree_end;
            Education::create($data);

            return redirect()->route('education.index')->with('success','Created successfully');        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $education = Education::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('admin.education.view',['education'=>$education]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $education = Education::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('admin.education.edit',['education'=>$education]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'degree_title' => [
                'required',
                'string',
                'max:255',
            ],
            'institute' => ['required', 'string', 'max:255'],
            'degree_start' => ['required', 'string', 'max:255'],
            'degree_end' => ['nullable', 'string', 'max:255'],
            'degree_description' => ['nullable', 'string'],
        ]);

        $education = Education::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

        // Update the model data
        $education->user_id = auth()->id();
        $education->degree_title = $request->degree_title;
        $education->institute = $request->institute;
        $education->degree_start = $request->degree_start;
        $education->degree_description = $request->degree_description;
        
        // Set degree_end to null if no_end_date is present
        $education->degree_end = $request->filled('continue') ? null : $request->degree_end;
        
        $education->save();

        return redirect()->route('education.index')->with('success','Updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $education = Education::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $education->delete();
        return redirect()->route('education.index')->with('error','Deleted successfully');
    }
}
