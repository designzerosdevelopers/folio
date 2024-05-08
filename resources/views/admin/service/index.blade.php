@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <x-page-title menu='Service' page='Index' />


            <a href="{{ route('service.create') }}"> <button type="button"
                    class="btn rounded-pill btn-primary">Create</button></a>


        </div>
        <div class="row ">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th>Visibility</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if (count($services) > 0)
                                    @forelse($services as $service)
                                        <tr>
                                            <td>{{ $service->service_title }}</td>
                                            <td>{{ $service->service_description }}</td>
                                            @if ($service->visibility === 1)
                                                <td><span class="badge bg-label-success me-1">Visible</span></td>
                                            @else
                                                <td><span class="badge bg-label-warning me-1">Invisible</span></td>
                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form
                                                            action="{{ route('visibility', ['id' => $service->id, 'model' => 'Service']) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">
                                                                @if ($service->visibility === 1)
                                                                    <i class="fas fa-eye-slash me-1"></i> Invisible
                                                                    <input type="hidden" name="visibility" value="0">
                                                                @else
                                                                    <input type="hidden" name="visibility" value="1">
                                                                    <i class="fas fa-eye me-1"></i> Visible
                                                                @endif
                                                            </button>
                                                        </form>
                                                        <a class="dropdown-item"
                                                            href="{{ Route('service.edit', $service->id) }}"><i
                                                                class="fas fa-edit me-1"></i> Edit</a>
                                                        <form action="{{ route('service.destroy', $service->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item"
                                                                onclick="return confirm('Are you sure you want to delete this record?')"><i
                                                                    class="fas fa-trash me-2"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                @else
                                    <tr>
                                        <td></td>
                                        <td class="text-muted">
                                            <small>No data available.</small>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
