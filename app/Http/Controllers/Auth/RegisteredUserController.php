<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($temp_name): View
    {
        
        return view('auth.register',['template'=>$temp_name]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'age' => ['required', 'integer'],
            'cv_id' => ['nullable', 'string', 'max:255'],
            'portfolio_id' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'in:Male,Female,Other'],
            'interest' => ['nullable', 'string', 'max:255'],
            'profession' => ['nullable', 'string', 'max:255'],
            'contact_number' => ['nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'url'],
            'twitter' => ['nullable', 'string', 'url'],
            'linked_in' => ['nullable', 'string', 'url'],
            'instagram' => ['nullable', 'string', 'url'],
            'github' => ['nullable', 'string', 'url'],
            'fiverr' => ['nullable', 'string', 'url'],
            'upwork' => ['nullable', 'string', 'url'],
            'freelancer' => ['nullable', 'string', 'url'],
            'website' => ['nullable', 'string', 'url'],
            'youtube' => ['nullable', 'string', 'url'],
            'profile_description' => ['nullable', 'string', 'max:1000'],
            'skill_description' => ['nullable', 'string', 'max:1000'],
            'service_description' => ['nullable', 'string', 'max:1000'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'age' => $request->age,
            'name' => $request->name,
            'email' => $request->email,
            'cv_id' => $request->cv_id,
            'portfolio_id' => $request->portfolio_id,
            'image' => $request->image,
            'address' => $request->address,
            'gender' => $request->gender,
            'interest' => $request->interest,
            'profession' => $request->profession,
            'contact_number' => $request->contact_number,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linked_in' => $request->linked_in,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'fiverr' => $request->fiverr,
            'upwork' => $request->upwork,
            'freelancer' => $request->freelancer,
            'website' => $request->website,
            'youtube' => $request->youtube,
            'profile_description' => $request->profile_description,
            'skill_description' => $request->skill_description,
            'service_description' => $request->service_description,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
