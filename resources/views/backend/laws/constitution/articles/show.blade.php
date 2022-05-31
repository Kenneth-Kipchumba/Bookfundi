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
                    <!--<a href="{{ route('backend.sub_articles.create') }}" class="btn btn-sm btn-success mr-0">
                     Create Sub Article
                    </a>-->

                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create">
                        Create Sub Article
                    </button>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="row">
                       <div class="col-12">
                           <h4>
                               {{ $article->chapter . ' - ' . $article->part }}
                           </h4>
                           <hr>
                           {!! $article->article !!}
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!--<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->
            <div class="modal-body">
                <div class="content">
                  <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                           <h3>Create a Sub Article</h3>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('backend.sub_articles.store') }}" method="POST">
                            @csrf
                            <div>
                               <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                                    @error('title')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>  
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    @error('description')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                      @enderror
                                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="90">
                                        
                                    </textarea>
                                </div>
                            </div>
                              
                            <button type="submit" class="btn btn-primary">Create</button>
                           </form>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script>
ClassicEditor
.create( document.querySelector( '#description' ) )
.catch( error => {
console.error( error );
} );
</script>
@endsection