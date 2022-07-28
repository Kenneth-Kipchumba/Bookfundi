@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Articles's Table</h3>
           <!--<a href="{{ route('backend.articles.create') }}" class="btn btn-primary right">Create new article</a>-->
        </div>
        <div class="card-body">
           <div class="table-responsive">
              <table class="table table-bordered border-primary table-hover table-sm">
               <thead>
                   <tr>
                       <th>Number</th>
                       <th>Articles</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                @foreach($articles as $article)
                <tr>
                   <td>
                       <a href="{{ route('backend.articles.show', $article->id) }}">
                           {{ $article->article_number }}
                       </a>
                   </td>
                   <td>
                    <?php 
                      $body =  Str::words($article->article_body, 20, '...');
                    ?>
                    {!! $body !!}
                    </td>
                   <td>
                       <a href="{{ route('backend.articles.edit', $article->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit {{ $article->article_number }}">
                           <i class="fas fa-pen"></i>
                       </a>
                       <?php
                       

                       $slug = Str::slug('s-' . $article->created_at);
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
                                You are about to remove Aricle
                                <span class="text-primary underline">
                                    {{ $article->article_number }}
                                </span> from the Constitution. Are you sure you want to proceed ?
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
@endsection