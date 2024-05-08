<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\User;
use App\Models\Service;
use App\Models\Template;
use App\Models\Skill;
use App\Models\Work;
use App\Models\Image;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Http\Request;

class SiteviewController extends Controller
{
    public function index($user_name)
    {
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


        $works = Work::where('user_id', $user->id)->get();
        foreach ($works as $work) {
            $image = Image::where('work_id', $work->id)->first();
            $work->thumbnail = $image->work_photos;
        }

        $experiences = Experience::where('user_id', $user->id)->get();

        return view('portfolio.' . $temp->temp_name . '.index', [
            'user' => $user,
            'services' => $services,
            'skills' => $skills,
            'works' => $works,
            'experiences' => $experiences
        ]);
    }

    public function portfolioImages(Request $request)
    {
        $images = Image::where('work_id', $request->id)->get();

        return view('portfolio/workImages', ['images' => $images, 'username' => $request->username]);
    }


    function getImage($work_id)
    {
        $images = Image::where('work_id', $work_id)->get(["work_photos"]);
        $work = Work::where('id', $work_id)->first(); // Assuming there's only one work with this ID
        $response = [
            'images' => $images,
            'work' => $work,
        ];
        return response()->json($response);
        
    }

    function ViewCv($user)
    {
        $user = User::where('email', $user)->first(); // Retrieve the user with the given email
        $cv_id = $user->cv_id;
        $cv = Template::where('id', $cv_id)->first();  // Get cv template details
        $education = Education::where('user_id', $user->id)->first();  // Get Education details
        return view('cv.' . $cv->temp_name, ['user' =>  $user], ['education' => $education]);
    }
}
