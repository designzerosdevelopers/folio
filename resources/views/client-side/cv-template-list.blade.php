@extends('layouts.client-side-no-nav')
@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <h2 class="mt-5">What would you like to choose?</h2>
    <div class="row mt-5">
        <!-- First iframe -->
        <div class="col-4">
            <iframe src="https://getbootstrap.com/docs/5.0/utilities/text/?" width="100%" height="300"></iframe>
        </div>

        <!-- Second iframe -->
        <div class="col-4">
            <iframe src="/choice" width="100%" height="300"></iframe>
        </div>

        <!-- Add more iframes as needed -->
        <!-- Repeat the structure below to add more iframes -->

        <!-- Third iframe -->
        <div class="col-4">
            <iframe src="/" width="100%" height="300"></iframe>
        </div>


        <!-- Add more iframes as needed -->
    </div>
</div>

@stop