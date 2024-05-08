@extends('layouts.admin')
@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <x-page-title menu='Education' page='Index'/>
      <a href="{{ route('education.create') }}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>
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
                        <th>Degree Title</th>
                        <th>Institute</th>
                        <th>Visibility</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @if(count($degrees) > 0)
                      @foreach($degrees as $degree)
                          <tr>
                              <td>{{$degree->degree_title}}</td>
                              <td>{{$degree->institute}}</td>
                              @if ($degree->visibility === 1)
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
                                          
                                        <form action="{{ route('visibility', ['id' => $degree->id, 'model' => 'Education']) }}" method="POST">
                                          @csrf
                                          <button type="submit" class="dropdown-item">
                                              @if ($degree->visibility === 1)
                                                  <i class="fas fa-eye-slash me-1"></i> Invisible
                                                  <input type="hidden" name="visibility" value="0">
                                              @else
                                                  <input type="hidden" name="visibility" value="1">
                                                  <i class="fas fa-eye me-1"></i> Visible
                                              @endif
                                          </button>
                                      </form>
                                      

                                            <a class="dropdown-item" href="{{Route('education.show', $degree->id)}}"
                                              ><i class="fas fa-file me-1"></i> View</a>
                                            
                                            
                                          <a class="dropdown-item" href="{{Route('education.edit', $degree->id)}}"
                                              ><i class="fas fa-edit me-1"></i> Edit</a>
                                          <form action="{{ route('education.destroy', $degree->id) }}" method="POST" style="display: inline;">
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
