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

                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_sub_article">
                        Create New Sub Article
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
                           <hr>
                           @foreach($sub_article as $sub)
                           <div class="card card-success ml-5">
                               <div class="card-header">
                                
                               </div>
                               <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6>{{ $sub->title }}</h6> 
                                    </div>
                                    <div class="col">
                       <?php
                       $slug = Str::slug('s-' . $sub->created_at);
                       ?>
                       <!-- Delete Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#<?= $slug; ?>">
                          <i class="fas fa-trash"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="<?= $slug; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-warning">
                                <h5 class="modal-title" id="exampleModalLabel">
                                You are about to remove {{ $sub->title }} from this article. Are you sure you want to proceed ?
                                </h5>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="{{ route('backend.articles.destroy', $sub->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-outline-danger float-right">
                                    Yes
                                  </button>
                                </form>

                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->

                        <!-- Trigger modal -->
                        <button type="button" class="btn btn-sm btn-default float-right" data-toggle="modal" data-target="#create_sub_sub_article">
                            Create Sub Sub Article
                        </button>

                        <button class="btn btn-sm btn-outline-info" title="Edit {{ $sub->title }}"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>
                                <hr>
                                 <p class="text-muted">{!! $sub->description !!}</p>  
                               </div>
                           </div>

                           <!-- Sub Sub Article Create Modal -->
                            <div class="modal fade" id="create_sub_sub_article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="content">
                                              <div class="container-fluid">
                                                <div class="card">
                                                    <div class="card-header">
                                                       <h3>Create a Sub Sub Article for : <span style="text-decoration: underline;" class="text-info">{{ $sub->title ?? " "}}</span> </h3>
                                                    </div>
                                                    <div class="card-body">
                                                       <form action="{{ route('backend.sub_articles.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="article_id" value="{{ $sub->id }}">
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
                                                                <label for="sub_article_description">Description</label>
                                                                @error('description')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                  @enderror
                                                                <textarea id="sub_article_description" name="description" class="form-control @error('description') is-invalid @enderror" rows="90">
                                                                    
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                          
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                       </form>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                           @endforeach
                           
                       </div>
                   </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

<!-- Sub Article Create Modal -->
<div class="modal fade" id="create_sub_article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content">
                  <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                           <h3>Create a Sub Article for : <span style="text-decoration: underline;" class="text-info">{{ $article->title ?? " "}}</span> </h3>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('backend.sub_articles.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
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
                                    <label for="article_description">Description</label>
                                    @error('description')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                      @enderror
                                    <textarea id="article_description" name="description" class="form-control @error('description') is-invalid @enderror" rows="90">
                                        
                                    </textarea>
                                </div>
                            </div>
                              
                            <button type="submit" class="btn btn-primary">Create</button>
                           </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End Sub Article Create Modal -->


<script>
ClassicEditor
.create( document.querySelector( '#article_description' ) )
.catch( error => {
console.error( error );
} );

ClassicEditor
.create( document.querySelector( '#sub_article_description' ) )
.catch( error => {
console.error( error );
} );
</script>
@endsection