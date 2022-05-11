@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $schedule->number }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.schedules.edit', $schedule->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $schedule->name }}">
                    <i class="fas fa-pen"></i>
                </a>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="row">
                       <div class="col-12">
                           <h4>
                               {{ $schedule->number . ' - ' . $schedule->name }}
                           </h4>
                           <hr>
                           {!! $schedule->body !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection