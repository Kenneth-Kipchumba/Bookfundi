@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $specialization->specialization_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.specializations.update', $specialization->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="specialization_name" class="form-label">Specialization Name</label>
                      <input type="text" name="specialization_name" class="form-control @error('specialization_name') is-invalid @enderror" id="specialization_name" value="{{ $specialization->specialization_name }}">
                      @error('specialization_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
            </div>
              
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

@endsection