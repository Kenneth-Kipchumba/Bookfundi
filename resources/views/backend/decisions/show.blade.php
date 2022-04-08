@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                    <h1 class="text-primary">{{ $decision->decision_name }} by {{ $decision->decision_type }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.decisions.edit', $decision->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $decision->decision_name }}">
                    <i class="fas fa-pen"></i>
                </a>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="row">
               <div class="col">
                   <div class="row">
                       <div class="col">
                           <div class="info-box">
                               5000 {{ $decision->decision_name }}s by {{ $decision->decision_type }}
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12">
                           <h4>Some extra details about {{ $decision->decision_name }}s by {{ $decision->decision_type }}</h4>
                           <p>Lorem ipsum represents long-held tradition fordesigners,typographers and the like. Some people hate it and argue forits demise, but others ignore.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection