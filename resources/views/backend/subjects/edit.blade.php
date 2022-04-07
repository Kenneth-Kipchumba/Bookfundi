@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $subject->subject_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.subjects.update', $subject->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="subject_name" class="form-label">Subject Name</label>
                      <input type="text" name="subject_name" class="form-control @error('subject_name') is-invalid @enderror" id="subject_name" value="{{ $subject->subject_name }}">
                      @error('subject_name')
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