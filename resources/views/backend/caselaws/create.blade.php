@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Caselaw</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.caselaws.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Case Details
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                              <label for="case_number" class="form-label">Case Number</label>
                              <input type="text" name="case_number" class="form-control @error('case_number') is-invalid @enderror" id="case_number">
                              @error('case_number')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="case_title" class="form-label">Case Title</label>
                              <input type="text" name="case_title" class="form-control @error('case_title') is-invalid @enderror" id="case_title">
                              @error('case_title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="case_judges" class="form-label">Case Judges</label>
                                <select id="case_judges" class="form-select" name="case_judges[]" style="width: 100%;" multiple="">
                                @foreach($judges as $judge)
                                    <option value="{{ $judge->judge_name }}">
                                        {{ $judge->judge_name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <!-- Plaintiff -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_plaintiff" class="form-label">Plaintiff</label>
                                      <select id="case_plaintiff" class="form-select" name="case_plaintiff" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="plaintiffs_advocate" class="form-label">Plaintiff's Advocate</label>
                                      <select id="plaintiffs_advocate" class="form-select" name="plaintiffs_advocate" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Respondent -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_respondent" class="form-label">Respondent</label>
                                      <select id="case_respondent" class="form-select" name="case_respondent" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="respondents_advocate" class="form-label">Respondent's Advocate</label>
                                      <select id="respondents_advocate" class="form-select" name="respondents_advocate" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Defendant -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_defendant" class="form-label">Defendant</label>
                                      <select id="case_defendant" class="form-select" name="case_defendant" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="defendants_advocate" class="form-label">Defendant's Advocate</label>
                                      <select id="defendants_advocate" class="form-select" name="defendants_advocate" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Appellant -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_appellant" class="form-label">Appellant</label>
                                      <select id="case_appellant" class="form-select" name="case_appellant" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="appellants_advocate" class="form-label">Appellant's Advocate</label>
                                      <select id="appellants_advocate" class="form-select" name="appellants_advocate" style="width: 100%;">
                                        @foreach($parties as $party)
                                            <option value="{{ $party->party_name }}">
                                                {{ $party->party_name }}
                                            </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                              <label for="case_decision" class="form-label">Decision</label>
                              <select id="case_decision" class="form-select" name="case_decision" style="width: 100%;">
                                @foreach($decisions as $decision)
                                    <option value="{{ $decision->decision_name }}">
                                        {{ $decision->decision_name }}
                                    </option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="case_outcome" class="form-label">Case Outcome</label>
                              <select id="case_outcome" class="form-select" name="case_outcome" style="width: 100%;">
                                @foreach($outcomes as $outcome)
                                    <option value="{{ $outcome->outcome_name }}">
                                        {{ $outcome->outcome_name }}
                                    </option>
                                @endforeach
                              </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_country" class="form-label">Case Country</label>
                                      <select id="case_country" class="form-select" name="case_country" style="width: 100%;">
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
                                      <label for="case_county" class="form-label">Case County</label>
                                      <select id="case_county" class="form-select" name="case_county" style="width: 100%;">
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
                                      <label for="case_town" class="form-label">Case Town</label>
                                      <select id="case_town" class="form-select" name="case_town" style="width: 100%;">
                                        @foreach($towns as $town)
                                      <option value="{{ $country->country_name }}">
                                          {{ $town->town_name }}
                                      </option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                      <label for="case_county" class="form-label">Year</label>
                                      <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                      <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                      <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">Caselaw</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="case_body"></label>
                                <textarea class="form-control @error('case_body') is-invalid @enderror" id="case_body" rows="20">
                                    
                                </textarea>
                            </div>
                        </div>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#case_country').select2()
    })
    $(document).ready(function () {
        $('#case_county').select2()
    })
    $(document).ready(function () {
        $('#case_town').select2()
    })
    $(document).ready(function () {
        $('#case_decision').select2()
    })
    $(document).ready(function () {
        $('#case_outcome').select2()
    })
    $(document).ready(function () {
        $('#case_plaintiff').select2()
    })
    $(document).ready(function () {
        $('#plaintiffs_advocate').select2()
    })
    $(document).ready(function () {
        $('#case_respondent').select2()
    })
    $(document).ready(function () {
        $('#respondents_advocate').select2()
    })
    $(document).ready(function () {
        $('#case_defendant').select2()
    })
    $(document).ready(function () {
        $('#defendants_advocate').select2()
    })
    $(document).ready(function () {
        $('#case_appellant').select2()
    })
    $(document).ready(function () {
        $('#appellants_advocate').select2()
    })
    $(document).ready(function () {
        $('#case_judges').select2({
            allowClear: true,
            theme: "classic"
        })
    })
</script>
@endsection