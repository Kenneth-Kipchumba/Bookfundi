@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-10">
                <h3 class="text-primary">
                    {!! $chapter->chapter_name !!}
                </h3>
                <p>
                    {!! $chapter->chapter_body !!}
                </p>
               </div>
               <div class="col-2">
                <div class="float-right">
                    <a href="{{ route('backend.chapters.edit', $chapter->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $chapter->chapter_name }}">
                     <i class="fas fa-pen"></i>
                    </a>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="container-fluid">
           <div class="card">
            <div class="card-header">
               <!-- Trigger Create Part and Article modals -->
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_part" title="Create New Part">
                    New Part
                </button>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_article" title="Create New Article">
                    New Article
                </button>
                <!-- End Trigger modal -->
                @include('backend.laws.constitution.chapters.modals')
            </div>
            <div class="card-body">
            @if(count($parts) == 0)
            <!-- Display articles that belongs to the chapter -->
                @if(count($articles) > 0)            
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Article</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($articles as $article)
                        <tr>
                            <?php 
                              $body =  Str::words($article->article_body, 20, '...');

                              $article_num = Str::slug('a-' . $article->article_number);
                            ?>
                           <td>
                            <a href="#{{ $article_num }}" data-toggle="modal" title="Modal">
                                {{ $article->article_number }}
                            </a>
                           </td>
                           <td>
                            
                            <!--<a href="#{{ $article_num }}" data-toggle="modal">
                                {!! $body !!}
                            </a>-->
                            <a href="{{ route('backend.articles.show', $article->id) }}" title="View">
                                {!! $body !!}
                            </a>
                            <!-- Article View Modal -->
                            <div class="modal fade" id="{{ $article_num }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">
                                        {!! $chapter->chapter_name !!}
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
                            <!-- End Article View Modal -->
                            </td>
                           <td>
                            <?php
                               $delete_id = Str::slug('d-' . $article->created_at);
                               $edit_id = Str::slug('e-' . $article->created_at);
                            ?>
                               
                            <!-- Edit Article modal trigger -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#<?= $edit_id; ?>">
                                <i class="fas fa-pen"></i>
                            </button>
                            <!-- Edit Article Modal trigger-->
                            <div class="modal fade" id="{{ $edit_id }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">
                                        Editing article
                                    <span class="text-info">
                                        {{ $article->article_number }} </span> of <span class="text-info">{!! $chapter->chapter_name !!}</span>
                                    </span>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <form action="{{ route('backend.articles.update', $article->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div>
                                        <input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
                                       <div class="mb-3">
                                            <label for="article_number" class="form-label">Article Number</label>
                                            <input type="text" name="article_number" class="form-control @error('article_number') is-invalid @enderror" id="article_number" value="{{ $article->article_number }}">
                                            @error('article_number')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>  
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <label for="article_body-{{$edit_id}}">Article</label>
                                            @error('article_body')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                              @enderror
                                            <textarea id="article_body-{{$edit_id}}" name="article_body" class="form-control @error('article_body') is-invalid @enderror" rows="10">
                                                {{ $article->article_body }}
                                            </textarea>
<script>
    ClassicEditor
    .create( document.querySelector( '#article_body-{{$edit_id}}' ) )
    .catch( error => {
    console.error( error );
    } );
</script>
                                        </div>
                                        <hr>
                                    </div>
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <!-- End Edit Article Modal -->
                            <!-- Delete Article Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#<?= $delete_id; ?>">
                                <i class="fas fa-trash"></i>
                            </button>
                            <!-- Delete Article Modal -->
                            <div class="modal fade" id="<?= $delete_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header bg-warning">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                        You are about to remove 
                                        <span class="bg-primary">
                                        Article number {{ $article->article_number }}   
                                        </span> from <span class="bg-primary">{!! $chapter->chapter_name !!} </span>. Are you sure you want to proceed ?
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
                @endif
            @else
                <div class="table-responsive">
                    <table class="table table-bordered border-primary table-hover table-sm">
                       <thead>
                           <tr>
                               <th>Parts</th>
                               <th></th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                            @foreach($parts as $part)
                            <tr>
                               <td>
                                   <a href="{{ route('backend.parts.show', $part->id) }}">
                                       {{ $part->part_name }}
                                   </a>
                               </td>
                               <td>
                                <?php 
                                  $body =  Str::words($part->part_body, 20, '...');
                                ?>
                                {!! $body !!}
                                </td>
                               <td>
                                   <a href="{{ route('backend.parts.edit', $part->id) }}" class="btn btn-sm btn-primary float-left">
                                       <i class="fas fa-pen"></i>
                                   </a>
                                   <?php
                                   

                                   $slug = Str::slug('s-' . $part->created_at);
                                   ?>
                                   <!-- Delete Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#<?= $slug; ?>">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?= $slug; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                            You are about to remove <span class="bg-primary">{{ $part->part_name }} </span> from <span class="bg-primary">{{ $chapter->chapter_name }} </span> Are you sure you want to proceed ?
                                            </h5>
                                          </div>
                                          <div class="modal-footer">
                                            
                                            <form action="{{ route('backend.parts.destroy', $part->id) }}" method="POST">
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
            @endif
            </div>
            <div class="card-footer">
                {{ $articles->links() }}
            </div>       
          </div>
          </div>
        </div>
        <div class="card-footer">
            
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