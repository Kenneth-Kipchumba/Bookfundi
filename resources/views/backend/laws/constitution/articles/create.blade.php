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
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="chapters" class="form-label">Chapter</label>
                      <input type="text" name="chapters" class="form-control @error('chapters') is-invalid @enderror" id="chapters">
                      @error('chapters')
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
                    <label for="articles">Article</label>
                    @error('articles')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="articles" name="articles" class="form-control @error('articles') is-invalid @enderror" rows="90">
                        
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
.create( document.querySelector( '#articles' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection