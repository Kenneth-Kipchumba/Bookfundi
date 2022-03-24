@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Court</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.courts.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="court_name" class="form-label">Court Name</label>
                      <input type="text" name="court_name" class="form-control @error('court_name') is-invalid @enderror" id="court_name">
                      @error('court_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                    <div class="mb-3">
                      <label for="court_level" class="form-label">Court Level</label>
                      <input type="text" name="court_level" class="form-control @error('court_level') is-invalid @enderror" id="court_level">
                      @error('court_level')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                    <label for="court_location" class="form-label">Court Location</label>
                    <input type="text" name="court_location" class="form-control @error('court_location') is-invalid @enderror" id="court_location">
                    @error('court_location')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                   </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                      <label for="court_country" class="form-label">Court Country</label>
                      <input type="text" name="court_country" class="form-control @error('court_country') is-invalid @enderror" id="court_country">
                      @error('court_country')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    </div>
                </div>
            </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection