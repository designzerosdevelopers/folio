<section>
  <h5 class="card-header">User Details</h5>
<div class="card-body">
    <div class="d-flex align-items-start align-items-sm-center gap-4">
      <img
      src="{{ asset('profile_pic/' . (empty($user->image) ? 'noimage.jpg' : $user->image)) }}"
        alt="user-avatar"
        class="d-block rounded"
        height="100"
        width="100"
        id="uploadedAvatar"
      />
      <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Select new photo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              name="image"
              accept="image/png, image/jpeg"
            />
          </label>
          <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
            <i class="bx bx-reset d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Upload</span>
          </button>
          <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Max size of 500K</p>
        </div>
      </form>
    </div>
    
  <hr class="my-0" />
  <div class="card-body">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
      <div class="row">
          <div class="mb-3 col-md-6">
              <x-input-label for="name" :value="__('Name')" />
              <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
          </div>
          <div class="mb-3 col-md-6">
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" name="age" type="text" class="form-control" :value="old('age', $user->age)" required autocomplete="age" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="website" :value="__('Website')" />
            <x-text-input id="website" name="website" type="text" class="form-control" :value="old('website', $user->website)" autocomplete="website" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="form-control" :value="old('address', $user->address)" required autocomplete="address" />
        </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="profession" :value="__('Profession')" />
            <x-text-input id="profession" name="profession" type="text" class="form-control" :value="old('profession', $user->profession)" required autocomplete="profession" />
          </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="Phone" :value="__('Phone Number')" />
              <x-text-input id="Phone" name="contact_number" type="number" class="form-control" :value="old('contact_number', $user->contact_number)" autocomplete="phone_number" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="gender" :value="__('Gender')" />
            <x-select-input id="gender" name="gender" class="form-control" required autocomplete="gender">
                <option value="" disabled selected>Select Gender</option>
                <option value="male" @if(old('gender', $user->gender) === 'male') selected @endif>Male</option>
                <option value="female" @if(old('gender', $user->gender) === 'female') selected @endif>Female</option>
                <option value="other" @if(old('gender', $user->gender) === 'other') selected @endif>Other</option>
            </x-select-input>
          </div>

          <a   class="mt-2 mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Add Social Media
          </a>  
              
              <div class="collapse" id="collapseExample">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <x-input-label for="facebook" :value="__('Facebook')" />
                    <x-text-input id="facebook" name="facebook" type="text" class="form-control" :value="old('facebook', $user->facebook)" autocomplete="facebook" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="twitter" :value="__('X (Twitter)')" />
                    <x-text-input id="twitter" name="twitter" type="text" class="form-control" :value="old('twitter', $user->twitter)" autocomplete="twitter" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="linked_in" :value="__('Linked-in')" />
                    <x-text-input id="linked_in" name="linked_in" type="text" class="form-control" :value="old('linked_in', $user->linked_in)" autocomplete="linked_in" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="instagram" :value="__('Instagram')" />
                    <x-text-input id="instagram" name="instagram" type="text" class="form-control" :value="old('instagram', $user->instagram)" autocomplete="instagram" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="github" :value="__('Github')" />
                    <x-text-input id="github" name="github" type="text" class="form-control" :value="old('github', $user->github)" autocomplete="github" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="fiverr" :value="__('Fiverr')" />
                    <x-text-input id="fiverr" name="fiverr" type="text" class="form-control" :value="old('fiverr', $user->fiverr)" autocomplete="fiverr" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="upwork" :value="__('Upwork')" />
                    <x-text-input id="upwork" name="upwork" type="text" class="form-control" :value="old('upwork', $user->upwork)" autocomplete="upwork" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="freelancer" :value="__('Freelancer')" />
                    <x-text-input id="freelancer" name="freelancer" type="text" class="form-control" :value="old('freelancer', $user->freelancer)" autocomplete="freelancer" />
                  </div>
                  <div class="mb-3 col-md-6">
                    <x-input-label for="youtube" :value="__('Youtube')" />
                    <x-text-input id="youtube" name="youtube" type="text" class="form-control" :value="old('youtube', $user->youtube)" autocomplete="youtube" />
                  </div>
                </div>  
              </div>
            <div class="mb-3 col-md-12">
              <x-input-label for="description" :value="__('Description')" />
              
                <textarea
                  id="description"
                  class="form-control"
                  rows="4"
                  name="profile_description"
                  placeholder="Tell us about the project!"
                  aria-label="Tell us about the project!"
                  aria-describedby="basic-icon-default-message2"
                >{{$user->profile_description}}</textarea>
              
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        

        <div class="mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'user-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
      </div>
    </form>
  </div>
</div>
</section>
