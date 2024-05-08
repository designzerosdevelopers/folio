<?php

namespace App\Http\Controllers;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




class AdminsettingController extends Controller
{
   

    public function indexsitetemplates() {
        $templates = Template::where('temp_type','pf')->get();
        return view('admin.site-template', ['templates'=>$templates]);
    }

    public function templatesettingstore(Request $request) {
        $userId = Auth::id();
        $user = User::find($userId);
    
        // Make sure 'porfolio_id' is the correct column name in your database
        $user->portfolio_id = $request->temp_id;
        $user->save();
        return redirect()->back()->with('sucess','Your template successfully changed');
    }

    public function visibility(Request $request, $id, $modelName) {
       
        $modelClass = app()->make("App\\Models\\$modelName");
        
     
        $model = $modelClass::find($id);
    
   
        $model->visibility = $request->visibility;
        
    
        $model->save();
    
        
        return redirect()->back()->with('success', 'Saved successfully.');
    }
    
    
}
