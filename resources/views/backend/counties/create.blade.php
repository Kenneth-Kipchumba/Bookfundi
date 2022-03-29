@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new County/Province/State</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.counties.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="county_name" class="form-label">County Name</label>
                      <input type="text" name="county_name" class="form-control @error('county_name') is-invalid @enderror" id="county_name">
                      @error('county_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                   <div class="mb-3">
                      <label for="county_code" class="form-label">County Code</label>
                      <input type="text" name="county_code" class="form-control @error('county_code') is-invalid @enderror" id="county_code">
                      @error('county_code')
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
                      <label for="county_country" class="form-label">County Country</label>
                      <select id="county_country" class="form-select" name="county_country" style="width: 100%;">
                          <option value="Kenya">Kenya</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Tanzania">Tanzania</option>
                      </select>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#county_country').select2()
    })
    $(document).ready(function () {
        $('#county_county').select2()
    })
</script>
@endsection