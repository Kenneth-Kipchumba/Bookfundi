@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit Firm {{ $firm->firm_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.firms.update', $firm->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="card card-info">
                        <div class="card-header">
                            <h2 class="card-title">
                                Current Details
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                      <label for="firm_name" class="form-label">Firm Name</label>
                      <input type="text" name="firm_name" class="form-control @error('firm_name') is-invalid @enderror" id="firm_name" value="{{ $firm->firm_name }}">
                      @error('firm_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                              <label for="firm_country" class="form-label">Firm Country</label>
                              <select id="firm_country" class="form-select" name="firm_country" style="width: 100%;">
                                @foreach($countries as $country)
                                  <option value="{{ $country->country_name }}">
                                  {{ $country->country_name }}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                              <label for="firm_county" class="form-label">Firm County</label>
                              <select id="firm_county" class="form-select" name="firm_county" style="width: 100%;">
                                @foreach($counties as $county)
                                  <option value="{{ $county->county_name }}">
                                  {{ $county->county_name }}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                              <label for="firm_town" class="form-label">Firm Town</label>
                              <select id="firm_town" class="form-select" name="firm_town" style="width: 100%;">
                                @foreach($towns as $town)
                                  <option value="{{ $town->town_name }}">
                                  {{ $town->town_name }}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                              <label for="firm_address" class="form-label">Firm Address</label>
                              <input type="text" name="firm_address" class="form-control @error('firm_address') is-invalid @enderror" id="firm_address" value="{{ $firm->firm_address }}">
                                @error('firm_address')
                                  <p class="text-danger">
                                      {{ $message }}
                                  </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                
                <div class="col">

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

<script type="text/javascript">
    $(document).ready(function () {
        $('#firm_country').select2()
    })
    $(document).ready(function () {
        $('#firm_county').select2()
    })
    $(document).ready(function () {
        $('#firm_town').select2()
    })
</script>
@endsection