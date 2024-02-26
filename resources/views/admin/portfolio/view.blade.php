@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-page-title menu='portfolio' page='view'/>

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
                    <div class="row">
                        <div class="col">
                            <label for="portfolio_title"><b>Portfolio Title</b></label>
                            <p class="form-control-static">{{$portfolio->work_title}}</p>
                        </div>
                        <div class="col">
                            <label for="url"><b>URl</b></label>
                            <p class="form-control-static">{{$portfolio->work_url}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label for="degree_start"><b>Work Date</b></label>
                            <p class="form-control-static">{{$portfolio->work_date}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="description"><b>Description</b></label>
                        <p class="form-control-static {{ empty($portfolio->work_description) ? 'small text-muted' : '' }}">
                            {{ $portfolio->work_description ?? 'Not available' }}
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
