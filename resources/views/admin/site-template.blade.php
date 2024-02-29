@extends('layouts.admin')
@section('content')


<div class="container d-flex flex-column " style="height: 100vh;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <x-page-title menu='Site templates' page='Index'/>
       
      </div>
    <div class="row">
        @foreach($templates as $template)
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
            <a href="{{$template->temp_name}}">
                <div class="border">
                   <img src="{{asset('portfolio_assets/template/portfolio/')}}/{{$template->temp_image}}" alt="{{$template->temp_name}} Image" width="340" height="165" target="_blank" class="d-block hover-zoom">
                </div>
                </a>
            <form action="{{route('template.setting.store',['temp_id' => $template->id])}}" method="POST">
                @csrf
                @method('PUT')
            <button type="submit" class="btn btn-primary mt-2">Use Template</button>
            </form>
        </div>
        @endforeach
    </div>
</div>


@stop