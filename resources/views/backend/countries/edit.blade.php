@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $country->country_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.countries.update', $country->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="country_name" class="form-label">Country Name</label>
                      <input type="text" name="country_name" class="form-control @error('country_name') is-invalid @enderror" id="country_name" value="{{ $country->country_name }}">
                      @error('country_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                   <div class="mb-3">
                    <label for="country_code" class="form-label">Country Code</label>
                    <input type="text" name="country_code" class="form-control @error('country_code') is-invalid @enderror" id="country_code" value="{{ $country->country_code }}">
                     @error('country_code')
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