@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $decision->decision_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.decisions.update', $decision->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="decision_name" class="form-label">Subject Name</label>
                      <input type="text" name="decision_name" class="form-control @error('decision_name') is-invalid @enderror" id="decision_name" value="{{ $decision->decision_name }}">
                      @error('decision_name')
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