@extends('layouts.admin')
@section('content')
<div class="container">
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
            
            <x-page-title menu='Education' page='Create'/>
            <style>

            </style>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('service.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="service_title">Service title</label>
                            <div class="row ">
                                @foreach($icons as $icon)
                                    <div class="icon-box col-md-2 col-4 m-md-1">
                                        <label>
                                            <input type="radio" name="icon_id" id="{{ $icon->id }}" value="{{ $icon->id }}" class="d-none" >
                                            <div class="row">
                                                <div class=" col-12 pt-2 d-flex justify-content-center">
                                                    {!! $icon->svg !!}
                                                </div>
                                                <div class="col-12 d-flex justify-content-center text-center">
                                                    <small title="{{$icon->svg_title}}" style="font-size: 10px;"> <!-- Adjust the font-size value as needed -->
                                                       <b> {{ strlen($icon->svg_title) > 20 ? substr($icon->svg_title, 0, 20) . '..' : $icon->svg_title }}</b>
                                                    </small>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                                <div class="icon-box col-md-2 col-4 m-md-1">
                                    <label>
                                        <input type="radio" name="icon_id" id="0" value="0" class="d-none" >
                                        <div class="row">
                                            <div class=" col-12 pt-2 d-flex justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 160" x="0px" y="0px"><title></title><path d="M31,64a32.6756,32.6756,0,0,0,6.92285,20.22461,1.9995,1.9995,0,0,0,3.1582-2.45312A28.71692,28.71692,0,0,1,35,64,29,29,0,1,1,64,93a27.26517,27.26517,0,0,1-13.05957-3.76465,1.9996,1.9996,0,1,0-1.88086,3.5293C52.98828,94.85938,57.835,97,64,97A33,33,0,1,0,31,64Z"/><path d="M13,77A13,13,0,1,0,0,64,13.01505,13.01505,0,0,0,13,77Zm0-22a9,9,0,1,1-9,9A9.01015,9.01015,0,0,1,13,55Z"/><path d="M115,51a13,13,0,1,0,13,13A13.01474,13.01474,0,0,0,115,51Zm0,22a9,9,0,1,1,9-9A9.00984,9.00984,0,0,1,115,73Z"/><path d="M77,13A13,13,0,1,0,64,26,13.01474,13.01474,0,0,0,77,13ZM55,13a9,9,0,1,1,9,9A9.01015,9.01015,0,0,1,55,13Z"/><path d="M77,115a13,13,0,1,0-13,13A13.01505,13.01505,0,0,0,77,115Zm-22,0a9,9,0,1,1,9,9A9.00984,9.00984,0,0,1,55,115Z"/><path d="M52.52966,59.595a6.08566,6.08566,0,0,1-.50952-.64191A13.05225,13.05225,0,1,0,61.208,51.30981c.04315.04407.10242.10559.1308.13617a5.95444,5.95444,0,0,1,1.57593,3.626,8.99163,8.99163,0,1,1-7.503,6.23712,5.967,5.967,0,0,1-2.71942-1.54529C52.6557,59.72723,52.56488,59.633,52.52966,59.595Z"/><circle cx="56.93427" cy="55.52051" r="2.00002" transform="translate(-22.56155 53.4102) rotate(-42.7591)"/><path d="M64,41A23.01032,23.01032,0,1,0,86.86816,61.55066a5.93628,5.93628,0,0,1-3.94366.95862C82.96307,63.00269,83,63.49683,83,64a19.07184,19.07184,0,1,1-3.88342-11.46307c.11926-.13123.24268-.25964.37451-.38141a5.96805,5.96805,0,0,1,3.20557-1.52606A22.98071,22.98071,0,0,0,64,41Z"/><circle cx="83.5625" cy="56.56248" r="2.00002" transform="translate(-16.19157 71.76551) rotate(-42.7591)"/><circle cx="44" cy="87.99998" r="2.00002" transform="translate(-48.05053 53.26242) rotate(-42.7597)"/><text x="0" y="143" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text><text x="0" y="148" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text></svg>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                   <small title="Other service" style="font-size: 10px;"><b>Other service</b></small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="custom_service_fields" style="display:none ;">
                            <div class="form-group mt-2" >
                                <input type="text" class="form-control" name="service_title"  placeholder="Enter Other Service title">
                            </div>
                            <div class="form-group" >
                                <label for="svg_icon">Svg icon code</label>
                                <input type="text" class="form-control" name="svg_icon_code"  placeholder="Enter custom icon code">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" value="{{ old('service_description') }}" id="description" name="service_description"></textarea>
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





