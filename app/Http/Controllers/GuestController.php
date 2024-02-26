<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Service;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Validation\Rule;
use SebastianBergmann\Template\Template as TemplateTemplate;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::where('temp_type','pf')->get();


        return view('client-side.folio-template-list', ['templates'=>$templates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($temp_name)
    {
        return view('client-side.profile', ['template'=>$temp_name]);
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
