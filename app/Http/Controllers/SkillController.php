<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            
        $skills = Skill::where('user_id', auth()->id())->get();

        return view('admin.skill.index', ['skills' => $skills]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $request->validate([
                'skill_name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('skills')->where(function ($query) {
                        return $query->where('user_id', auth()->id());
                    }),
                    
                ],
                'skill_percentage' => ['required', 'integer', 'min:0', 'max:100'],
            ]);
    
            Skill::create([
                'skill_name' => $request->skill_name,
                'skill_percentage' => $request->skill_percentage,
                'user_id' => auth()->id(),
            ]);

            return redirect()->route('skill.index')->with('success','Created successfully'); 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = Skill::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $skills = Skill::where('user_id', auth()->id())->get();
        return view('admin.skill.index',['skill_data'=>$skill, 'skills'=>$skills]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'skill_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('skills')->where(function ($query) use ($request, $id) {
                    return $query->where('user_id', auth()->id())
                        ->where('id', '<>', $id);
                }),
            ],
            'skill_percentage' => ['required', 'integer', 'min:0', 'max:100'],
        ]);
        

        $skill=Skill::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $skill->user_id = auth()->id();
        $skill->skill_name = $request->skill_name;
        $skill->skill_percentage = $request->skill_percentage;
        $skill->save();

        return redirect()->route('skill.index')->with('success','Updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Skill::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $education->delete();
        return redirect()->route('skill.index')->with('success','Deleted successfully');
    }
}
