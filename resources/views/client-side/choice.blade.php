@extends('layouts.client-side-no-nav')
@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <h2 class="mt-5 ">What would you like to choose?</h2>
    <div class="row">
        <div class="col m-5 border rounded text-center p-4">
            <a href="choose-live-folio-template" >
                <h1 class="px-4 m-5">online Portfolio with cv</h1>
            </a>
        </div>
        <div class="col m-5 border rounded text-center p-4">
            <a href="choose-cv-template" >
                <h1 class="px-4 m-5">Create cv</h1>
            </a>
        </div>
    </div>
</div>

@stop