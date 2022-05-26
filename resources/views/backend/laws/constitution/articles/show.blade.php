@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col">
                <h1 class="text-primary">{{ $article->chapter }}</h1>
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
                               {{ $article->chapter . ' - ' . $article->parts }}
                           </h4>
                           <hr>
                           {!! $article->article !!}
                           <hr>
                           <h4>Sub Article</h4>
                           {!! $article->article !!}
                           <hr>
                           <h4>Sub Sub Article</h4>
                           {!! $article->article !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection