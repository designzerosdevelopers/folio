<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'website' => ['nullable','string', 'max:550'],
            'age' => ['int'],
            'image' => [
                'nullable',
                'file',
                'mimes:jpg,png,jpeg',
                'max:500',
            ],
            'address' => ['string', 'max:555'],
            'gender' => ['string', 'max:555'],
            'profession' => ['string', 'max:555'],
            'contact_number' => ['nullable', 'max:555'],
            'facebook' => ['nullable','string', 'max:555'],
            'twitter' => ['nullable','string', 'max:555'],
            'linked_in' => ['nullable','string', 'max:555'],
            'instagram' => ['nullable','string', 'max:555'],
            'github' => ['nullable','string', 'max:555'],
            'fiverr' => ['nullable','string', 'max:555'],
            'upwork' => ['nullable','string','max:555'],
            'freelancer' => ['nullable','string', 'max:555'],
            'youtube' => ['nullable','string', 'max:555'],
            'profile_description' => ['nullable','string', 'max:5555'],
            'skill_description' => ['nullable','string', 'max:5555'],
            'service_description' => ['nullable','string', 'max:5555'],
            'portfolio_id' => ['nullable','int'],
            'cv_id' => ['nullable','int'],
            'email' => ['email', 'max:555', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
