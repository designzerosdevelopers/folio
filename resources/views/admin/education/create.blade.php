@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-page-title menu='Education' page='Create'/>
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
                    <form action="{{ route('education.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                              <label for="degreee_title">Degree Title</label>
                            <input type="text" class="form-control" value="{{ old('degree_title') }}"  id="degreee_title" name="degree_title" required>
                          </div>

                        <div class="form-group">
                            <label for="institute">Institute</label>
                          <input type="text" class="form-control" value="{{ old('institute') }}" id="institute" name="institute" required>
                        </div>
            
                        <div class="form-group">
                            <label for="degree_start">Degree Start</label>
                            <input type="date" class="form-control" value="{{ old('degree_start') }}" id="degree_start" name="degree_start" required>
                        </div>
            
                        <div class="form-group" id="end">
                            <label for="end">Degree End</label>
                            <input type="date" class="form-control" value="{{ old('degree_end') }}" id="end" name="degree_end">
                            <small class="text-muted">If your degree is ongoing, leave above field empty.</small>
                        </div>
            
                        <div class="form-group">
                            <label for="description">Description  <small class="text-muted">(optional)</small></label>
                            <textarea class="form-control" value="{{ old('degree_description') }}" id="description" name="degree_description"></textarea>
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

