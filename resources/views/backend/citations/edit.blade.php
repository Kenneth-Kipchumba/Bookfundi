@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $citation->citation_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.citations.update', $citation->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="citation_name" class="form-label">Citation Name</label>
                      <input type="text" name="citation_name" class="form-control @error('citation_name') is-invalid @enderror" id="citation_name" value="{{ $citation->citation_name }}">
                      @error('citation_name')
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