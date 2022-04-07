@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Citation</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.citations.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="citation_name" class="form-label">Citation Name</label>
                      <input type="text" name="citation_name" class="form-control @error('citation_name') is-invalid @enderror" id="citation_name">
                      @error('citation_name')
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