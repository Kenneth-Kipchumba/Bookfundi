@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Article</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.articles.store') }}" method="POST">
            @csrf
            <div>
               <div class="mb-3">
                    <label for="article_name" class="form-label">Article Name</label>
                    <input type="text" name="article_name" class="form-control @error('article_name') is-invalid @enderror" id="article_name">
                    @error('article_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>  
            </div>
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="chapter" class="form-label">Chapter</label>
                      <input type="text" name="chapter" class="form-control @error('chapter') is-invalid @enderror" id="chapter">
                      @error('chapter')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                    <div class="mb-3">
                      <label for="part" class="form-label">Part</label>
                      <input type="text" name="part" class="form-control @error('part') is-invalid @enderror" id="part">
                      @error('part')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="article_body">Article</label>
                    @error('article_body')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="article_body" name="article_body" class="form-control @error('article_body') is-invalid @enderror" rows="90">
                        
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

<script>
ClassicEditor
.create( document.querySelector( '#article' ) )
.catch( error => {
console.error( error );
} );
ClassicEditor
.create( document.querySelector( '#sub_article' ) )
.catch( error => {
console.error( error );
} );
ClassicEditor
.create( document.querySelector( '#sub_sub_article' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection