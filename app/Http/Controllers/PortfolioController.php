<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Image;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Work::where('user_id', auth()->id())->get();
    
        return view('admin.portfolio.index', ['portfolios' => $portfolios]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'work_title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('works')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                }),
            ],
            'work_url'          => ['nullable', 'max:255'],
            'work_date'         => ['required'],
            'work_description'  => ['nullable', 'max:255'],
            'work_photos.*'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'work_photos'       => 'max:15',
        ]);

        $work = Work::create([
            'user_id'           => auth()->id(),
            'work_title'        => $request->work_title,
            'work_url'          => $request->work_url,
            'work_date'         => $request->work_date,
            'work_description'  => $request->work_description,
        ]);
        
        foreach ($request->file('work_photos') as $file) {

            $uniqueName = Str::uuid()->toString() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('project_photos'), $uniqueName);
        
            Image::create([
                'user_id'      => auth()->id(),
                'work_id'      => $work->id, 
                'work_photos'  => $uniqueName,
            ]);
        }
        
        return redirect()->route('portfolio.index')->with('success','Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $images = Image::where('work_id', $id)->where('user_id', auth()->id())->get();
        $portfolio = Work::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('admin.portfolio.view',['portfolio'=>$portfolio, 'images' => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $images = Image::where('work_id', $id)->where('user_id', auth()->id())->get();
        $portfolio = Work::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('admin.portfolio.edit',['portfolio'=>$portfolio, 'images' => $images]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $work = Work::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $request->validate([
            'work_title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('works')->ignore($work->id)->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                }),
            ],
            'work_url'          => ['nullable', 'max:255'],
            'work_date'         => ['required'],
            'work_description'  => ['nullable', 'max:255'],
            'work_photos'       => 'max:15' 
        ]);

        if ($request->hasFile('work_photos')) {
            $request->validate([
                'work_photos.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            foreach ($request->file('work_photos') as $file) {
                $uniqueName = Str::uuid()->toString() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('project_photos'), $uniqueName);
            
                Image::create([
                    'user_id'      => auth()->id(),
                    'work_id'      => $work->id, 
                    'work_photos'  => $uniqueName,
                ]);
            }
        }

        $work->update([
            'work_title'        => $request->work_title,
            'work_url'          => $request->work_url,
            'work_date'         => $request->work_date,
            'work_description'  => $request->work_description,
        ]);
        
        return redirect()->route('portfolio.index')->with('success', 'Updated successfully');       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $work = Work::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
    $images = Image::where('work_id', $id)->where('user_id', auth()->id())->get();

    foreach ($images as $image) {
        $imageFilePath = public_path('project_photos/' . $image->work_photos);
        if (file_exists($imageFilePath)) {
            unlink($imageFilePath);
        }
        $image->delete();
    }
    $work->delete();

    return redirect()->route('portfolio.index')->with('error', 'Deleted successfully');
    }

    public function image_delete($image_id)
    {
        $image = Image::where('id', $image_id)->where('user_id', auth()->id())->firstOrFail();
        $imageFilePath = public_path('project_photos/' . $image->work_photos);
        if (file_exists($imageFilePath)) {
            unlink($imageFilePath);
        }
        $image->delete();
        return redirect()->back();
        
    }

    
    public function swipe($id)
    {
        // Get the current image
        $currentImage = Image::findOrFail($id);

        // Get the next image
        $nextImage = Image::where('id', '>', $id)
            ->orderBy('id')
            ->firstOrFail();

        // Swap the 'work_photos' attribute between the current and next images
        $currentWorkPhotos = $currentImage->work_photos;
        $nextWorkPhotos = $nextImage->work_photos;
        $nextImage->update([
            'work_photos' => $currentWorkPhotos,
        ]);
        $currentImage->update([
            'work_photos' => $nextWorkPhotos,
        ]);


        return redirect()->back();
    }
}
