@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <x-page-title menu='Portfolio' page='Index'/>
        <a href="{{ route('portfolio.create') }}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>
      </div>
    <div class="row">
        <div class="col-md-12">
          @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
          @endif
          @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
          @endif
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Project name</th>
                        <th>URL</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @if(count($portfolios) > 0)
                      @foreach($portfolios as $portfolio)
                          <tr>
                              <td>{{$portfolio->work_title}}</td>
                              <td>{{$portfolio->work_url}}</td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{Route('portfolio.show', $portfolio->id)}}"
                                              ><i class="fas fa-file me-1"></i> View</a>
                                          <a class="dropdown-item" href="{{Route('portfolio.edit', $portfolio->id)}}"
                                              ><i class="fas fa-edit me-1"></i> Edit</a>
                                          <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display: inline;">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash me-2"></i> Delete</button>
                                          </form>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
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