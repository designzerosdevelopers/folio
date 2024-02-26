@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-page-title menu='Experience' page='view'/>

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
                            <label for="degreee_title"><b>Company</b></label>
                            <p class="form-control-static">{{$exp->company_name}}</p>
                        </div>
                        <div class="col">
                            <label for="institute"><b>Position</b></label>
                            <p class="form-control-static">{{$exp->position}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label for="degree_start"><b>Started</b></label>
                            <p class="form-control-static">{{$exp->exp_start}}</p>
                        </div>
                        <div class="col">
                            <label for="degree_end"><b>Ended</b></label>
                            <p class="form-control-static">{{ $exp->exp_end ?? 'Continue' }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="description"><b>Description</b></label>
                        <p class="form-control-static {{ empty($exp->exp_description) ? 'small text-muted' : '' }}">
                            {{ $exp->exp_description ?? 'Not available' }}
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
