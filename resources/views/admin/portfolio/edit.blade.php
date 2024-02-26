@extends('layouts.admin')
@section('content')
<div class="container">
    <x-page-title menu='Portfolio' page='Edit'/>
    <div class="row">
        <div class="col-md-12">
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
                        <div class="form-group">
                            <label for="existing_images">Existing Images <small class="text-muted">(Select images you want to delete)</small></label>
                            <div class="row" id="imageContainer">
                                @foreach ($images as $i => $image)
                                    <div class="col-md-3 mb-2 position-relative image-container">
                                        <img src="https://www.pngkey.com/png/detail/233-2332677_image-500580-placeholder-transparent.png" data-src="{{ asset('project_photos/' . $image->work_photos) }}" alt="Portfolio Image" class="img-thumbnail image lazy-load" style="width: 100%;" loading="lazy">
                                        <div class="delete-icon">
                                            <form action="{{ route('image-delete', $image->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure you want to delete this image?')">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-center">
                                        @if ($i < count($images) - 1)
                                            <a href="{{ route('image-swipe', $image->id) }}" class="btn btn-sm swipe-button">
                                                <i class="fas fa-rotate fa-xl"></i>
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('portfolio.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="work_title">Project Name</label>
                                <input type="text" class="form-control" value="{{$portfolio->work_title}}"  id="work_title" name="work_title" required>
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
                                <input type="text" class="form-control"  value="{{$portfolio->work_url}}" id="work_url" name="work_url" required>
                            </div>

                            <div class="form-group">
                                <label for="work_photos">Photos <small class="text-muted">(Add new images, optional)</small></label>
                                <input type="file" class="form-control"  id="work_photos" name="work_photos[]" accept=".jpg, .jpeg, .png" multiple>
                            </div>

                            <div class="form-group">
                                <label for="work_date">Date</label>
                                <input type="date" class="form-control" value="{{$portfolio->work_date}}" id="work_date" name="work_date" required>
                            </div>              
                        
                            <div class="form-group">
                                <label for="description">Description <small class="text-muted">(optional)</small></label>
                                <textarea class="form-control" id="description" name="work_description">{{$portfolio->work_description}}</textarea>
                            </div>
                            <div class="form-group mt-2">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@stop
