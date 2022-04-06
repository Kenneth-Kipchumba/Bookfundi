@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1 class="text-primary">{{ $firm->firm_name }}</h1>
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col-8">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    Country
                                </span>
                                <span class="info-box-text">
                                    {{ $firm->firm_country }}
                                </span>
                            </div>
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    County
                                </span>
                                <span class="info-box-text">
                                    {{ $firm->firm_county }}
                                </span>
                            </div>
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    Town
                                </span>
                                <span class="info-box-text">
                                    {{ $firm->firm_town }}
                                </span>
                            </div>
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-number">
                                    Address
                                </span>
                                <span class="info-box-text">
                                    {{ $firm->firm_address }}
                                </span>
                            </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>More Info</h4>
                           <p>Previously a {{ $firm->firm_name }} firm and currently a {{ $firm->firm_specialization }} Advocate.
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-4">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $firm->firm_county }} {{ $firm->firm_country }}
                    <span class="badge badge-primary badge-pill">12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $firm->firm_town }}
                    <span class="badge badge-primary badge-pill">50</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $firm->firm_address }}
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