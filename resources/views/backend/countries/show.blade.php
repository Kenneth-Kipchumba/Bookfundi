@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $country->country_name }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.countries.edit', $country->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $country->country_name }}">
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
                               5 Courts
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               4 Judges
                           </div>
                       </div>
                       <div class="col">
                           <div class="info-box">
                               70000 Cases
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>Some extra details about the country</h4>
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