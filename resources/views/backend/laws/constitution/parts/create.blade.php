@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Part</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.chapters.store') }}" method="POST">
            @csrf
            <div>
               <div class="mb-3">
                    <label for="part_name" class="form-label">Name</label>
                    <input type="text" name="part_name" class="form-control @error('part_name') is-invalid @enderror" id="part_name">
                    @error('part_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                      <label for="part_body" class="form-label">Body</label>
                      <input type="text" name="part_body" class="form-control @error('part_body') is-invalid @enderror" id="part_body">
                      @error('part_body')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div>
            </div>
              
            <button type="submit" class="btn btn-primary">Create</button>
           </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

@endsection