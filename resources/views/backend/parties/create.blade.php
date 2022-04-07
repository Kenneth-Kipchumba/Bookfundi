@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Party</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.parties.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="party_name" class="form-label">Party Name</label>
                      <input type="text" name="party_name" class="form-control @error('party_name') is-invalid @enderror" id="party_name">
                      @error('party_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
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