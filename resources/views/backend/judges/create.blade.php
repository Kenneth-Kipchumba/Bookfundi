@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Judge</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.judges.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="judge_name" class="form-label">Judge Name</label>
                      <input type="text" name="judge_name" class="form-control @error('judge_name') is-invalid @enderror" id="judge_name">
                      @error('judge_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                    
                </div>
            </div>
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
                      <label for="judge_current_court_level" class="form-label">Jugde Current Court Level</label>
                      <select id="judge_current_court_level" class="form-select" name="judge_current_court_level" style="width: 100%;">
                        <option value="Supreme Court">Supreme Court</option>
                        <option value="Court of Appeal">Court of Appeal</option>
                        <option value="High Court">High Court</option>
                        <option value="Employment and Labor Relations Court">Employment and Labor Relations Court</option>
                        <option value="Magistrates’ Courts">Magistrates’ Courts</option>
                        <option value="Kadhis Courts">Kadhis Courts</option>
                        <option value="Court Martial">Court Martial</option>
                        <option value="Environment and Land Court">Environment and Land Court</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="judge_current_country" class="form-label">Judge Current Country</label>
                      <select id="judge_current_country" class="form-select" name="judge_current_country" style="width: 100%;">
                        @foreach($countries as $country)
                          <option value="{{ $country->country_name }}">
                          {{ $country->country_name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                
                
                    <div class="mb-3">
                      <label for="judge_current_county" class="form-label">
                         Judge Current County/State/Province
                      </label>
                      <select id="judge_current_county" class="form-select @error('judge_current_county') is-invalid @enderror" name="judge_current_county" style="width: 100%;">
                          <optgroup label="Kenya">
                            @foreach($counties as $county)
                              <option value="{{ $county->county_name }}">
                              {{ $county->county_name }}
                              </option>
                            @endforeach
                          </optgroup>
                          <optgroup label="Uganda">
                            <option value="Kampala">Kampala</option>
                            <option value="Jinja">Jinja</option>
                            <option value="Entebbe">Entebbe</option>  
                          </optgroup>
                          <optgroup label="Tanzania">
                            <option value="Daresalaam">Daresalaam</option>
                            <option value="Dodoma">Dodoma</option>
                            <option value="Kigoma">Kigoma</option>  
                          </optgroup>
                      </select>
                    </div>
                
                
                    <div class="mb-3">
                      <label for="judge_current_town" class="form-label">Judge Current City/Town</label>
                      <select id="judge_current_town" class="form-select" name="judge_current_town" style="width: 100%;">
                          @foreach($towns as $town)
                              <option value="{{ $town->town_name }}">
                              {{ $town->town_name }}
                              </option>
                            @endforeach
                      </select>
                    </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Previous Details</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                      <label for="judge_previous_court_level" class="form-label">Jugde Previous Court Level</label>
                      <select id="judge_previous_court_level" class="form-select" name="judge_previous_court_level" style="width: 100%;">
                        <option value="Supreme Court">Supreme Court</option>
                        <option value="Court of Appeal">Court of Appeal</option>
                        <option value="High Court">High Court</option>
                        <option value="Employment and Labor Relations Court">Employment and Labor Relations Court</option>
                        <option value="Magistrates’ Courts">Magistrates’ Courts</option>
                        <option value="Kadhis Courts">Kadhis Courts</option>
                        <option value="Court Martial">Court Martial</option>
                        <option value="Environment and Land Court">Environment and Land Court</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="judge_previous_country" class="form-label">Judge Previous Country</label>
                      <select id="judge_previous_country" class="form-select" name="judge_previous_country" style="width: 100%;">
                        @foreach($countries as $country)
                          <option value="{{ $country->country_name }}">
                          {{ $country->country_name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                
                
                    <div class="mb-3">
                      <label for="judge_previous_county" class="form-label">
                         Judge Previous County/State/Province
                      </label>
                      <select id="judge_previous_county" class="form-select @error('judge_previous_county') is-invalid @enderror" name="judge_previous_county" style="width: 100%;">
                          <optgroup label="Kenya">
                            @foreach($counties as $county)
                              <option value="{{ $county->county_name }}">
                              {{ $county->county_name }}
                              </option>
                            @endforeach
                          </optgroup>
                          <optgroup label="Uganda">
                            <option value="Kampala">Kampala</option>
                            <option value="Jinja">Jinja</option>
                            <option value="Entebbe">Entebbe</option>  
                          </optgroup>
                          <optgroup label="Tanzania">
                            <option value="Daresalaam">Daresalaam</option>
                            <option value="Dodoma">Dodoma</option>
                            <option value="Kigoma">Kigoma</option>  
                          </optgroup>
                      </select>
                    </div>
                
                
                    <div class="mb-3">
                      <label for="judge_previous_town" class="form-label">Judge Previous City/Town</label>
                      <select id="judge_previous_town" class="form-select" name="judge_previous_town" style="width: 100%;">
                          @foreach($towns as $town)
                              <option value="{{ $town->town_name }}">
                              {{ $town->town_name }}
                              </option>
                            @endforeach
                      </select>
                    </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                
                <div class="col">

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
        $('#judge_current_court_level').select2()
    })
    $(document).ready(function () {
        $('#judge_current_country').select2()
    })
    $(document).ready(function () {
        $('#judge_current_county').select2()
    })
    $(document).ready(function () {
        $('#judge_current_town').select2()
    })
    $(document).ready(function () {
        $('#judge_previous_court_level').select2()
    })
    $(document).ready(function () {
        $('#judge_previous_country').select2()
    })
    $(document).ready(function () {
        $('#judge_previous_county').select2()
    })
    $(document).ready(function () {
        $('#judge_previous_town').select2()
    })
</script>
@endsection