@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit Advocate {{ $advocate->advocate_name }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.advocates.update', $advocate->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card card-info">
                <div class="card-header">
                    <h2 class="card-title">
                        Advocate Details
                    </h2>
                </div>
                <div class="card-body">
                   <div class="mb-3">
                      <label for="advocate_name" class="form-label">Advocate Name</label>
                      <input type="text" name="advocate_name" class="form-control @error('advocate_name') is-invalid @enderror" id="advocate_name" value="{{ $advocate->advocate_name }}">
                      @error('advocate_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                
                    <div class="mb-3">
                      <label for="advocate_firm" class="form-label">Advocate Law Firm</label>
                      <select id="advocate_firm" class="form-select" name="advocate_firm" style="width: 100%;">
                        @foreach($firms as $firm)
                          <option value="{{ $firm->firm_name }} {{ $firm->firm_country }} {{ $firm->firm_county }} {{ $firm->firm_town }} {{ $firm->firm_address }}">
                          {{ $firm->firm_name }} {{ $firm->firm_country }} {{ $firm->firm_county }} {{ $firm->firm_town }} {{ $firm->firm_address }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="advocate_specialization" class="form-label">Advocate Specialization</label>
                      <select id="advocate_specialization" class="form-select" name="advocate_specialization" style="width: 100%;">
                        @foreach($specializations as $specialization)
                          <option value="{{ $specialization->specialization_name }}">
                          {{ $specialization->specialization_name }}
                          </option>
                        @endforeach
                      </select>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#advocate_firm').select2()
    })
    $(document).ready(function () {
        $('#advocate_specialization').select2()
    })
</script>
@endsection