@extends('layouts.admin')
@section('content')
    <div class="container d-flex flex-column " style="height: 100vh;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <x-page-title menu='CV' page='Setting' />
        </div>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('cv.setting.store') }}" method='post'>
                            @csrf
                            <div class="btn-group mt-1 w-100" role="group">
                                <button type="submit" name="side" value="left" class="btn btn-secondary">Left</button>
                                <input type="text" value="Language" class="btn" disabled>
                                <input type="hidden" name="section" value="language">
                                <button type="submit" name="side" value="right"
                                    class="btn btn-secondary">Right</button>
                            </div>
                        </form>
                        <form action="{{ route('cv.setting.store') }}" method='post'>
                            <div class="btn-group mt-1 w-100" role="group">
                                <button type="submit" value="left" class="btn btn-secondary">Left</button>
                                <input type="text" value="Education" class="btn" disabled>
                                <input type="hidden" name="section" value="Education">
                                <button type="submit" value="right" class="btn btn-secondary">Right</button>
                            </div>
                        </form>

                        <form action="{{ route('cv.setting.store') }}" method='post'>
                            <div class="btn-group mt-1 w-100" role="group">
                                <button type="submit" value="left" class="btn btn-secondary">Left</button>
                                <input type="text" value="Skill" class="btn" disabled>
                                <input type="hidden" name="section" value="Skill">
                                <button type="submit" value="right" class="btn btn-secondary">Right</button>
                            </div>
                        </form>

                        <form action="{{ route('cv.setting.store') }}" method='post'>
                            <div class="btn-group mt-1 w-100" role="group">
                                <button type="submit" value="left" class="btn btn-secondary">Left</button>
                                <input type="text" value="Projects" class="btn" disabled>
                                <input type="hidden" name="section" value="Projects">
                                <button type="submit" value="right" class="btn btn-secondary">Right</button>
                            </div>
                        </form>

                        <form action="{{ route('cv.setting.store') }}" method='post'>
                            <div class="btn-group mt-1 w-100" role="group">
                                <button type="submit" value="left" class="btn btn-secondary">Left</button>
                                <input type="text" value="Experience" class="btn" disabled>
                                <input type="hidden" name="section" value="Experience">
                                <button type="submit" value="right" class="btn btn-secondary">Right</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <iframe src="{{ route('taotest') }}" width="100%" height="600px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
@stop
