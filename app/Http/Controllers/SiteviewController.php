<?php

namespace App\Http\Controllers;
use App\Models\Icon;
use App\Models\User;
use App\Models\Service;
use App\Models\Template;
use App\Models\Skill;
use App\Models\Work;
use App\Models\Image;
use Illuminate\Http\Request;

class SiteviewController extends Controller
{
    public function index($user_name) {
        $user = User::where('email', $user_name)->firstOrFail();
        $temp = Template::where('id', $user->portfolio_id)->firstOrFail();
        $services = Service::where('user_id', $user->id)->get();

            foreach ($services as $service) {
                if ($service->icon_id > 0) {
                    $icon = Icon::find($service->icon_id);
                    if ($icon) {
                        $service->service_title = $icon->svg_title;
                        $service->svg_icon_code = $icon->svg;
                    }
                }
            }
        
           $skills = Skill::where('user_id', $user->id)->get();


           $imagesids = Image::where('user_id', $user->id)
           ->whereIn('work_id', Work::pluck('id')->toArray())
           ->distinct()
           ->pluck('work_id');

           $works = Work::with('image')->get();
      
           foreach ($works as $work) {
            echo "Work ID: " . $work->id . "\n";
            
            // Access the first image associated with this work
            $image = $work->image()->first();
            
            if ($image) {
                echo "Image ID: " . $image->id . "\n";
                // Access other properties of the image as needed
                echo "Image Name: " . $image->work_photos . "\n"; // Assuming there's a Name property
                echo "Image URL: " . $image->url . "\n"; // Assuming there's a URL property
                echo "Image Caption: " . $image->caption . "\n"; // Assuming there's a Caption property
            } else {
                echo "No photo found for this work.\n";
            }
        }
    }
        
        
        
        
    
        
        
        
        
        
        
        
        

          
        // return view('portfolio.' . $temp->temp_name . '.index', [
        //     'user' => $user,
        //     'services' => $services,
        //     'skills' => $skills,
        //     'works' => $works
        // ]);
    
    
}