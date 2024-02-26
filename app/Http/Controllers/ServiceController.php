<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Service;
Use App\Models\Icon;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('user_id', auth()->id())->get();
        foreach ($services as $service) {
            if ($service->icon_id != 0) {
                $icon = Icon::find($service->icon_id);
                $service->service_title = $icon->svg_title;
                $service->svg_icon_code = $icon->svg;
            }
        }
        return view('admin.service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $icons = Icon::get();

        return view('admin.service.create', ['icons' => $icons]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $rules = [
                'service_title' => [
                    $request->icon_id == 0 ? 'required' : 'nullable',
                    'string',
                    'max:255',
                    Rule::unique('services')->where(function ($query) {
                        return $query->where('user_id', auth()->id());
                    }),
                ],
                'icon_id' => 'nullable',
                'svg_icon_code' => $request->icon_id == 0 ? 'required' : 'nullable',
                'service_description' => 'required|string',
            ];

            if ($request->icon_id != 0) {
                Rule::unique('services')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                });
            }

            // Validate the request
            $request->validate($rules, [
                'icon_id.unique' => 'The service title has already been taken.'
            ]);

            Service::create([
                'user_id' => auth()->id(),
                'icon_id' => $request->icon_id,
                'service_title' => $request->icon_id > 0 ? null : $request->service_title,
                'svg_icon_code' => $request->icon_id > 0 ? null : $request->svg_icon_code,
                'service_description' => $request->service_description,
            ]);
            
            return redirect()->route('service.index')->with('success','Added successfully'); 

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $icons = Icon::get();
        if($service->icon_id != 0){
            $icon =Icon::find($service->icon_id);
            $service->service_title = $icon->svg_title;
            $service->svg_icon_code = $icon->svg;
        }
       
        return view('admin.service.edit',['icons'=>$icons, 'service'=>$service]);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
// Define the base validation rules
$rules = [
    'service_title' => [
        $request->icon_id == 0 ? 'required' : 'nullable',
        'string',
        'max:255',
        Rule::unique('services')->where(function ($query) use ($request, $id) {
            return $query->where('user_id', auth()->id())
                ->where('id', '<>', $id);
        }),
    ],
    'icon_id' => ['nullable'],
    'svg_icon_code' => [$request->icon_id == 0 ? 'required' : 'nullable'],
    'service_description' => ['required', 'string'],
];

// Conditionally add the unique rule for icon_id if it's not equal to 0
if ($request->icon_id != 0) {
    $rules['icon_id'][] = Rule::unique('services')->where(function ($query) use ($request, $id) {
        return $query->where('user_id', auth()->id())
            ->where('id', '<>', $id);
    });
}

// Validate the request
$request->validate($rules, [
    'icon_id.unique' => 'The service title has already been taken.'
]);


        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->user_id = auth()->id();
        $service->icon_id = $request->icon_id;
        $service->service_title = $request->icon_id > 0 ? null : $request->service_title;
        $service->svg_icon_code = $request->icon_id > 0 ? null : $request->svg_icon_code;
        $service->service_description = $request->service_description;
        $service->save();

        return redirect()->route('service.index')->with('success','Updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->delete();
        return redirect()->route('service.index')->with('success','Deleted successfully');
    }
}
