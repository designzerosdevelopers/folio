@extends('layouts.admin')
@section('content')
  <div class="container flex-grow-1 container-p-y">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="row">
          <div class="col-md-12 mt-4">

            <div class="card mb-4">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="card mb-4">
                 @include('profile.partials.update-password-form')
             </div>
            <div class="card md-4">
                 @include('profile.partials.delete-user-form')
            </div>
          </div>  
        </div>    
    </div>    
@stop
