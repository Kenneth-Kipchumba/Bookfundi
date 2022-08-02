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
                           <h3>Create a Sub Article for  : <span style="text-decoration: underline;" class="text-info">Article {{ $article->article_number ?? " "}}</span> </h3>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('backend.sub_articles.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <div>
                               <div class="mb-3">
                                    <label for="sub_article_number" class="form-label">Number</label>
                                    <input type="text" name="sub_article_number" class="form-control @error('sub_article_number') is-invalid @enderror" id="sub_article_number">
                                    @error('sub_article_number')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>  
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="sub_article_body">
                                        Body
                                    </label>
                                    @error('sub_article_body')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                      @enderror
                                    <textarea id="sub_article_body" name="sub_article_body" class="form-control @error('sub_article_body') is-invalid @enderror" rows="90">
                                        
                                    </textarea>
                                </div>
                            </div>
                              
                            <button type="submit" class="btn btn-success">Create</button>
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