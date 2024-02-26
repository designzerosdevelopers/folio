@extends('layouts.admin')
@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Language Form</h1>
            @if($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{ route('language.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="language_name">Language Name</label>
                    <input type="text" class="form-control"  id="language_name" name="language_name" required>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-9 mt-1">
                         <button type="submit" class="btn btn-primary float-right">Next</button>
                    </div>
                  </div>
            </form>


        </div>
    </div>
</div>


@stop

