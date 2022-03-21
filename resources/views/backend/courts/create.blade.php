@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Courts Name</h3> 
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col-8">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                               5 Judges
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               4 Court rooms
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               70000 Cases heard
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>Some details about the court</h4>
                           <p>Lorem ipsum represents long-held tradition fordesigners,typographers and the like. Some people hate it and argue forits demise, but others ignore.
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