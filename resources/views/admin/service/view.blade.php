@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-page-title menu='Education' page='view'/>

            @if($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="degreee_title"><b>Degree Title</b></label>
                            <p class="form-control-static">{{$education->degree_title}}</p>
                        </div>
                        <div class="col">
                            <label for="institute"><b>Institute</b></label>
                            <p class="form-control-static">{{$education->institute}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label for="degree_start"><b>Degree Start</b></label>
                            <p class="form-control-static">{{$education->degree_start}}</p>
                        </div>
                        <div class="col">
                            <label for="degree_end"><b>Degree End</b></label>
                            <p class="form-control-static">{{ $education->degree_end ?? 'Continue' }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="description"><b>Description</b></label>
                        <p class="form-control-static {{ empty($education->degree_description) ? 'small text-muted' : '' }}">
                            {{ $education->degree_description ?? 'Not available' }}
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
