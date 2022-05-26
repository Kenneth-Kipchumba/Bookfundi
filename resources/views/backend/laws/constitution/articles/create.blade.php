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
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                    @error('title')
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
                      <label for="parts" class="form-label">Part</label>
                      <input type="text" name="parts" class="form-control @error('parts') is-invalid @enderror" id="parts">
                      @error('parts')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="article">Article</label>
                    @error('article')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="article" name="article" class="form-control @error('article') is-invalid @enderror" rows="90">
                        
                    </textarea>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="sub_article">Sub Article</label>
                    @error('sub_article')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="sub_article" name="sub_article" class="form-control @error('sub_article') is-invalid @enderror" rows="90">
                        
                    </textarea>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="sub_sub_article">Sub Sub Article</label>
                    @error('sub_sub_article')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="sub_sub_article" name="sub_sub_article" class="form-control @error('sub_sub_article') is-invalid @enderror" rows="90">
                        
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