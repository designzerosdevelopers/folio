@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-page-title menu='Experience' page='Create'/>
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
                    <form action="{{ route('experience.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                              <label for="company_name">Company</label>
                              <span class="info-icon" onclick="toggleInfoNote('company-note')">ℹ️</span>
                              <small class="col-8 col-md-3 text-muted info-note" id="company-note">
                                Company name where you gained your experience
                              </small>
                              <div class="arrow"></div>
                            </div>
                            <input type="text" class="form-control" value="{{ old('company_name') }}" id="company_name" name="company_name">
                          </div>
                        
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="position">Position</label>
                                <span class="info-icon" onclick="toggleInfoNote('position-note')">ℹ️</span>
                                <small class="col-8 col-md-3 text-muted info-note" id="position-note">
                                    Write the job title that you held in the company
                                </small>
                                <div class="arrow"></div>
                            </div>
                            <input type="text" class="form-control" value="{{ old('position') }}" id="position" name="position" required>
                        </div>
            
                        <div class="form-group">
                            <label for="exp_start">Start</label>
                            <input type="month" class="form-control" value="{{ old('exp_start') }}" id="exp_start" name="exp_start" required>
                        </div>
            
                        <div class="form-group" id="end">
                            <label for="exp_end">End</label>
                            <input type="month" class="form-control" value="{{ old('exp_end') }}" id="exp_end" name="exp_end">
                            <small class="text-muted">If your experience is ongoing, leave above field empty.</small>
                        </div>
            
                        <div class="form-group">
                            <label for="description">Description  <small class="text-muted">(optional)</small></label>
                            <textarea class="form-control" value="{{ old('exp_description') }}" id="description" name="exp_description"></textarea>
                        </div>
            
                        <div class="form-group mt-2">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
</div>


@stop

