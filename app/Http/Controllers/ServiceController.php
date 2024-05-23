<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Icon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

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
            'icon_id' => [
                'nullable',
                $request->icon_id == 0 ? null :
                    Rule::unique('services')->where(function ($query) {
                        return $query->where('user_id', auth()->id());
                    })

            ],
            'svg_icon_code' => $request->icon_id == 0 ? 'required' : 'nullable',
            'service_description' => 'required|string',
        ];

        if (empty($request->service_title)) {
            $request->validate($rules, [
                'icon_id.unique' => 'You already have a service with this title.'
            ]);
        } else {
            $request->validate($rules, [
                'service_title.unique' => 'You already have a service with this title.'
            ]);
        }

        // Create the service
        Service::create([
            'user_id' => auth()->id(),
            'icon_id' => $request->icon_id,
            'service_title' => $request->icon_id > 0 ? null : $request->service_title,
            'svg_icon_code' => $request->icon_id > 0 ? null : $request->svg_icon_code,
            'service_description' => $request->service_description,
            'visibility' => $request->visibility,
        ]);

        return redirect()->route('service.index')->with('success', 'Service added successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $icons = Icon::get();
        if ($service->icon_id != 0) {
            $icon = Icon::find($service->icon_id);
            $service->service_title = $icon->svg_title;
            $service->svg_icon_code = $icon->svg;
        }

        return view('admin.service.edit', ['icons' => $icons, 'service' => $service]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $rules = [
            'service_title' => [
                $request->icon_id == 0 ? 'required' : 'nullable',
                'string',
                'max:255',
                Rule::unique('services')->where(function ($query) use ($request) {
                    $query->where('user_id', auth()->id());
                    if ($request->icon_id != 0) {
                        $query->where('icon_id', $request->icon_id);
                    } else {
                        $query->whereNull('icon_id');
                    }
                })->ignore($id),
            ],
            'icon_id' => [
                'nullable',
                Rule::unique('services')->where(function ($query) use ($request) {
                    $query->where('user_id', auth()->id());
                    if ($request->icon_id != 0) {
                        $query->where('icon_id', $request->icon_id);
                    } else {
                        $query->whereNull('icon_id');
                    }
                })->ignore($id),
            ],
            'svg_icon_code' => [$request->icon_id == 0 ? 'required' : 'nullable'],
            'service_description' => ['required', 'string'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }




        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->user_id = auth()->id();
        $service->icon_id = $request->icon_id;
        $service->service_title = $request->icon_id > 0 ? null : $request->service_title;
        $service->svg_icon_code = $request->icon_id > 0 ? null : $request->svg_icon_code;
        $service->service_description = $request->service_description;
        $service->visibility = $request->visibility;
        $service->save();

        return redirect()->route('service.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Deleted successfully');
    }
}
