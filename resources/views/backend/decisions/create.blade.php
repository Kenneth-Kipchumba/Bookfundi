@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Decision</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.decisions.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="decision_name" class="form-label">Decision Name</label>
                    <input type="text" name="decision_name" class="form-control @error('decision_name') is-invalid @enderror" id="decision_name">
                    @error('decision_name')
                    <p class="text-danger">
                            {{ $message }}
                    </p>
                    @enderror
                </div>
              
            <button type="submit" class="btn btn-success">Create</button>
           </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

@endsection