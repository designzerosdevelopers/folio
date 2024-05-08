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
                    <form action="{{ route('portfolio.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="work_title">Project Name</label>
                            <input type="text" class="form-control" value="{{ old('work_title') }}" id="work_title" name="work_title" required>
                        </div>
            
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="url">URL <small class="text-muted"> (optional)</small></label>
                                <span class="info-icon" onclick="toggleInfoNote('url-note')">ℹ️</span>
                                <small class="col-8 col-md-3 text-muted info-note" id="url-note">
                                    Website or any platform video URL of the project
                                </small>
                                <div class="arrow"></div>
                            </div>
                            <input type="text" class="form-control" id="work_url" name="work_url" required>
                        </div>
            
                        <div class="form-group">
                            <label for="work_photos">Photos</label>
                            <input type="file" class="form-control" value="{{ old('work_photos[]') }}" id="work_photos" name="work_photos[]" accept=".jpg, .jpeg, .png" multiple required>
                        </div>
            
                        <div class="form-group" id="end">
                            <label for="end">Date</label>
                            <input type="date" class="form-control" value="{{ old('work_date') }}" id="end" name="work_date">
                            <small class="text-muted">Provide the date of project you worked.</small>
                        </div>
            
                        <div class="form-group">
                            <label for="description">Description <small class="text-muted">(optional)</small></label>
                            <textarea class="form-control" value="{{ old('work_description') }}" id="description" name="work_description"></textarea>
                        </div>
            
                        <div class="form-group mt-2">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary" name="visibility" value="1">Save</button>
                                <button type="submit" class="btn btn-secondary"name="visibility" value="0">Draft</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
</div>


@stop

