<!-- Create Part Modal -->
<div class="modal fade" id="create_part" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h3>Create Part for : 
                                    <span style="text-decoration: underline;" class="text-info">
                                       {{ $chapter->chapter_name ?? " "}}
                                    </span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('backend.parts.store') }}" method="POST">
                                @csrf
                                    <input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
                                    <div>
                                        <div class="mb-3">
                                            <label for="part_name" class="form-label">
                                                Name
                                            </label>
                                            <input type="text" name="part_name" class="form-control @error('part_name') is-invalid @enderror" id="part_name">
                                            @error('part_name')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>  
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <label for="part_body" class="form-label">
                                                Body
                                            </label>
                                            <input type="text" name="part_body" class="form-control @error('part_body') is-invalid @enderror" id="part_body">
                                            @error('part_body')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
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
<!-- End Part Modal -->

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
                                <h3>Create Article for : 
                                    <span style="text-decoration: underline;" class="text-info">
                                       {{ $chapter->chapter_name ?? " "}}
                                    </span>
                                </h3>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('backend.articles.store') }}" method="POST">
                            @csrf
                                <input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
                                <div class="mb-3">
                                    <label for="article_name" class="form-label">
                                        Name
                                    </label>
                                    <input type="text" name="article_name" class="form-control @error('article_name') is-invalid @enderror" id="article_name">
                                    @error('article_name')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="article_body" class="form-label">
                                        Body
                                    </label>
                                    <input type="text" name="article_body" class="form-control @error('article_body') is-invalid @enderror" id="article_body">
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