@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1 class="text-primary">{{ $advocate->advocate_name }}</h1>
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col-8">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    Law Firm
                                </span>
                                <span class="info-box-text">
                                    {{ $advocate->advocate_firm }}
                                </span>
                            </div>
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    Specialization
                                </span>
                                <span class="info-box-text">
                                    {{ $advocate->advocate_specialization }} Laywer
                                </span>
                            </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>More Info</h4>
                           <p>Previously a {{ $advocate->advocate_name }} advocate and currently a {{ $advocate->advocate_specialization }} Advocate.
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-4">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cases
                    <span class="badge badge-primary badge-pill">12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Win
                    <span class="badge badge-success badge-pill">50</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lost
                    <span class="badge badge-danger badge-pill">99</span>
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