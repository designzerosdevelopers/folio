@extends('layouts.client-side-no-nav')
@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <h2 class="">What would you like to choose?</h2>
    <div class="row">
        @foreach($templates as $template)
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
            <a href="{{$template->temp_name}}">
                <div class="border">
                   <img src="{{asset('portfolio_assets/template/portfolio/')}}/{{$template->temp_image}}" alt="{{$template->temp_name}} Image" width="340" height="165" target="_blank" class="d-block hover-zoom">
                </div>
                </a>
            <a href="{{route('register', ['temp_name'=>$template->temp_name])}}" class="btn btn-primary mt-2">Use Template</a>
        </div>
        @endforeach
    </div>
</div>



@stop