@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $sub_article->title }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.sub_articles.edit', $sub_article->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $sub_article->title }}">
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
                               {{ $sub_article->title }}
                           </h4>
                           <hr>
                           {!! $sub_article->description !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection