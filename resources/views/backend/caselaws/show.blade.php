@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $caselaw->caselaw_name }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.caselaws.edit', $caselaw->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $caselaw->caselaw_name }}">
                        <i class="fas fa-pen"></i>
                    </a>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col-8">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                               50 Respondents
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               4 Judges
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               2 Advocates
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>More Info</h4>
                           <p>
                               {{ $caselaw->caselaw_name }}
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-4">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Case Number
                    <span class="badge badge-primary badge-pill">{{ $caselaw->case_number }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Opposing Parties
                    <table>
                        <tbody>
                            <tr>
                                <td>{{ $caselaw->case_plaintiff }}</td>
                            </tr>
                        </tbody>
                    </table>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Supporting Parties
                    <span class="badge badge-primary badge-pill">{{ $caselaw->case_respondent }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Current Court Level
                    <span class="badge badge-primary badge-pill">{{ $caselaw->caselaw_current_court_level }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Previous Court Level
                    <span class="badge badge-primary badge-pill">{{ $caselaw->caselaw_previous_court_level }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Decision
                    <span class="badge badge-primary badge-pill">{{ $caselaw->caselaw_previous_court_level }}</span>
                  </li>
                </ul> 
               </div>
           </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection