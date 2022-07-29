@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>
            Edit {{ $chapter->chapter_name }}
           </h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.chapters.update', $chapter->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
               <div class="mb-3">
                    <label for="chapter_name" class="form-label">Chapter Name</label>
                    <input type="text" name="chapter_name" class="form-control @error('chapter_name') is-invalid @enderror" id="chapter_name" value="{{ $chapter->chapter_name }}">
                    @error('chapter_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>  
            </div>
            <div>
                <div class="mb-3">
                    <label for="chapter_body">Body</label>
                    @error('chapter_body')
                      <p class="text-danger">
                        {{ $message }}
                      </p>
                    @enderror
                    <textarea id="chapter_body" name="chapter_body" class="form-control @error('chapter_body') is-invalid @enderror" rows="10">
                        {{ $chapter->chapter_body }}
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
.create( document.querySelector( '#chapter_body' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection