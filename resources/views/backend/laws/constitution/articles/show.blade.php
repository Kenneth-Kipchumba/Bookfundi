@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $article->chapters }}</h1>
               </div>
               <div class="col">
                <div class="float-right">
                    <a href="{{ route('backend.articles.edit', $article->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $article->article_name }}">
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
                               {{ $article->chapters . ' - ' . $article->parts }}
                           </h4>
                           <hr>
                           {!! $article->articles !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection