@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-9">
                <h1 class="text-primary">{{ $article->title }}</h1>
               </div>
               <div class="col-3">
                <div class="float-right">
                    <a href="{{ route('backend.articles.edit', $article->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $article->title }}">
                     <i class="fas fa-pen"></i>
                    </a>
                </div>
                <div class="float-left">
                    <a href="{{ route('backend.sub_articles.create') }}" class="btn btn-sm btn-success mr-0">
                     Create Sub Article
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
                           {!! $article->sub_article !!}
                           <hr>
                           <h4>Sub Sub Article</h4>
                           {!! $article->sub_sub_article !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection