@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $outcome->outcome_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.outcomes.update', $outcome->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="outcome_name" class="form-label">Subject Name</label>
                      <input type="text" name="outcome_name" class="form-control @error('outcome_name') is-invalid @enderror" id="outcome_name" value="{{ $outcome->outcome_name }}">
                      @error('outcome_name')
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