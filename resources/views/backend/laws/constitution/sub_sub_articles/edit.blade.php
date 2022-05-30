@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>
            Edit {{ $sub_sub_article->title }}
           </h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.sub_sub_articles.update', $sub_sub_article->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
               <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $sub_sub_article->title }}">
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
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="10">
                        {{ $sub_sub_article->description }}
                    </textarea>
                </div>
                <hr>
            </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

<script>
ClassicEditor
.create( document.querySelector( '#description' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection