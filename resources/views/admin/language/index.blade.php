@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <x-page-title menu='Language' page='Index'/>
       
      </div>
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger mt-2">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
            </div>
            @endif
                  <!-- Hoverable Table rows -->
                  <div class="card">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Language</th>
                            <th>Visibility</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach($languages as $language)
                              <tr>
                                  <td>{{$language->language_name}}</td>
                                  @if ($language->visibility === 1)
                                  <td><span class="badge bg-label-success me-1">Visible</span></td>
                                  @else
                                  <td><span class="badge bg-label-warning me-1">Invisible</span></td>
                                  @endif
                                  <td>
                                      <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <form action="{{ route('visibility', ['id' => $language->id, 'model' => 'Language']) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    @if ($language->visibility === 1)
                                                        <i class="fas fa-eye-slash me-1"></i> Invisible
                                                        <input type="hidden" name="visibility" value="0">
                                                    @else
                                                        <input type="hidden" name="visibility" value="1">
                                                        <i class="fas fa-eye me-1"></i> Visible
                                                    @endif
                                                </button>
                                            </form>
                                              <a class="dropdown-item" href="{{Route('language.edit', $language->id)}}"
                                                  ><i class="fas fa-edit me-1"></i> Edit</a>
                                              <form action="{{ route('language.destroy', $language->id) }}" method="POST" style="display: inline;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash me-2"></i> Delete</button>
                                              </form>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                          @endforeach
                          <tr>
                            <td>
                                <form action="{{ isset($lang) ? route('language.update', $language->id) : route('language.store') }}" method="POST">
                                    @csrf
                                    @if(isset($lang))
                                        @method('PUT')
                                    @endif
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="language" name="language_name" value="{{ isset($lang) ? $language->language_name : '' }}" required>
                                    </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <button type="submit" class="btn rounded-pill btn-primary">
                                        {{isset($lang) ? 'Update' : 'Create' }}
                                    </button>
                                </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
        </div>
    </div>
</div>
@stop