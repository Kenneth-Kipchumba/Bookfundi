@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Edit {{ $article->chapters . ' ' . $article->parts }}</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="chapters" class="form-label">Chapter</label>
                      <input type="text" name="chapters" class="form-control @error('chapters') is-invalid @enderror" id="chapters" value="{{ $article->chapters }}">
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
                    <input type="text" name="parts" class="form-control @error('parts') is-invalid @enderror" id="parts" value="{{ $article->parts }}">
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
                    <textarea id="articles" name="articles" class="form-control @error('articles') is-invalid @enderror" rows="10">
                        {{ $article->articles }}
                    </textarea>
                </div>
            </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>

@endsection