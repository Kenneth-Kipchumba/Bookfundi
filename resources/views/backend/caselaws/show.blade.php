@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1 class="text-primary">{{ $judge->judge_name }}</h1>
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col-8">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                               500 Cases
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               4 Decisions
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               2 Titles
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>More Info</h4>
                           <p>Previously a {{ $judge->judge_previous_court_level }} judge and currently a {{ $judge->judge_current_court_level }} Judge.
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-4">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Criminal Cases
                    <span class="badge badge-primary badge-pill">12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Civil Cases
                    <span class="badge badge-primary badge-pill">50</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Constitutional Cases
                    <span class="badge badge-primary badge-pill">99</span>
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