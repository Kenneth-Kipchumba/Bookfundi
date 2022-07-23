@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-9">
                <h1 class="text-primary">{{ $part->part_name }}</h1>
               </div>
               <div class="col-3">
                <div class="float-right">
                    <a href="{{ route('backend.parts.edit', $part->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $part->part_name }}">
                     <i class="fas fa-pen"></i>
                    </a>
                </div>
                <div class="float-left">

                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_sub_part">
                        Create New Sub Article
                    </button>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

@endsection