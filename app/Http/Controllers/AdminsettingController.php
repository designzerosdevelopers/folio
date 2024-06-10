<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class AdminsettingController extends Controller
{

    public function wkPDF()
    {
        $user =  User::where('id',auth()->id())->first();

        $html = View::make('cv.dejavu',['user'=> $user])->render();

        $command = '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe" --page-size A4 --margin-top 0 --margin-right 0 --margin-bottom 0 --margin-left 0 - -';

        $descriptors = [
            0 => ["pipe", "r"],
            1 => ["pipe", "w"],
            2 => ["pipe", "w"], 
        ];
        $process = proc_open($command, $descriptors, $pipes);
        if (is_resource($process)) {
            fwrite($pipes[0], $html);
            fclose($pipes[0]);
            $pdf = stream_get_contents($pipes[1]);
            fclose($pipes[1]);
            $errors = stream_get_contents($pipes[2]);
            fclose($pipes[2]);
            $return_value = proc_close($process);

            if ($return_value !== 0) {
            }

            file_put_contents(public_path('wkcv.pdf'), $pdf);
        }

        return view('cv.dejavu', ['user' => $user]);
    }

    public function indexsitetemplates()
    {
        $templates = Template::where('temp_type', 'pf')->get();
        return view('admin.site-template', ['templates' => $templates]);
    }

    public function templatesettingstore(Request $request)
    {
        $userId = Auth::id();
        $user = User::find($userId);

        // Make sure 'porfolio_id' is the correct column name in your database
        $user->portfolio_id = $request->temp_id;
        $user->save();
        return redirect()->back()->with('sucess', 'Your template successfully changed');
    }

    public function visibility(Request $request, $id, $modelName)
    {

        $modelClass = app()->make("App\\Models\\$modelName");


        $model = $modelClass::find($id);


        $model->visibility = $request->visibility;


        $model->save();


        return redirect()->back()->with('success', 'Saved successfully.');
    }
}
