@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $party->party_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.parties.update', $party->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="party_name" class="form-label">Subject Name</label>
                      <input type="text" name="party_name" class="form-control @error('party_name') is-invalid @enderror" id="party_name" value="{{ $party->party_name }}">
                      @error('party_name')
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