@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-10">
                <h5 class="text-primary">
                    {{ $part->part_name . ' - ' . $part->part_body }}
                </h5>
               </div>
               <div class="col-2">
                <div class="float-right">
                    <a href="{{ route('backend.parts.edit', $part->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $part->part_name }}">
                     <i class="fas fa-pen"></i>
                    </a>
                </div>
                <div class="float-left">

                    <!-- Trigger modal -->
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_article" title="Create new article">
                        New Article
                    </button>
                    <!-- End Trigger New Article Modal -->
                    <!-- Create Article Modal -->
                    <div class="modal fade" id="create_article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <h5>Create Article for : 
                                                        <span style="text-decoration: underline;" class="text-info">
                                                           {{ $part->part_name . ' ' . $part->part_body ?? " "}}
                                                        </span>
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                <form action="{{ route('backend.articles.store') }}" method="POST">
                                                @csrf
                                                    <input type="hidden" name="part_id" value="{{ $part->id }}">
                                                    <div class="mb-3">
                                                        <label for="article_number" class="form-label">
                                                            Number
                                                        </label>
                                                        <input type="text" name="article_number" class="form-control @error('article_number') is-invalid @enderror" id="article_number">
                                                        @error('article_number')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="article_body" class="form-label">
                                                            Body
                                                        </label>
                                                        <textarea name="article_body" class="form-control @error('article_body') is-invalid @enderror" id="article_body">
                                                        </textarea>
                                                        @error('article_body')
                                                        <p class="text-danger">
                                                            {{ $message }}
                                                        </p>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">
                                                        Create
                                                    </button>
                                                </form>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            
                            </div>
                        </div>
                    </div>
                    <!-- End Article Modal -->
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="table-responsive">
              <table class="table table-bordered border-primary table-hover table-sm">
               <thead>
                   <tr>
                       <th></th>
                       <th>Articles</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                @foreach($articles as $article)
                <tr>
                   <td>
                        {{ $article->article_number }}
                   </td>
                   <td>
                    <?php 
                              $body =  Str::words($article->article_body, 20, '...');

                              $article_num = Str::slug('a-' . $article->article_number);
                            ?>
                            <a href="#{{ $article_num }}" data-toggle="modal">
                                {!! $body !!}
                            </a>
                            <!-- Article View Modal -->
                            <div class="modal fade" id="{{ $article_num }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">
                                        {!! $part->part_name !!}
                                       <span class="text-info">
                                           Article {{ $article->article_number }}
                                       </span>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    {!! $article->article_body !!}
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                    </td>
                   <td>
                    <?php
                        $slug = Str::slug('s-' . $article->created_at);
                    ?>
                    <div class="btn-group-vertical">
                        <a href="{{ route('backend.articles.edit', $article->id) }}" class="btn btn-sm btn-primary float-left">
                        <i class="fas fa-pen"></i>
                        </a>
                        <!-- Delete Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#<?= $slug; ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                        <!-- Modal -->
                        <div class="modal fade" id="<?= $slug; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header bg-warning">
                                <h5 class="modal-title" id="exampleModalLabel">
                                You are about to remove {{ $article->article_number }} from the Constitution. Are you sure you want to proceed ?
                                </h5>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="{{ route('backend.articles.destroy', $article->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger float-right">
                                    Yes
                                  </button>
                                </form>

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->
                   </td>
                </tr>
                @endforeach
               </tbody>
             </table>
           </div> 
        </div>
        <div class="card-footer">
            {{ $articles->links() }}
        </div>
    </div>
  </div>
</div>

<script>
ClassicEditor
.create( document.querySelector( '#article_body' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection