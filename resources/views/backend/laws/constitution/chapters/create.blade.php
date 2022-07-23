@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Create a new Chapter</h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.chapters.store') }}" method="POST">
            @csrf
            <div>
               <div class="mb-3">
                    <label for="chapter_name" class="form-label">Chapter Name</label>
                    <input type="text" name="chapter_name" class="form-control @error('chapter_name') is-invalid @enderror" id="chapter_name">
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
                    <textarea id="chapter_body" name="chapter_body" class="form-control @error('chapter_body') is-invalid @enderror" rows="90">
                        
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
.create( document.querySelector( '#chapter_body' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection