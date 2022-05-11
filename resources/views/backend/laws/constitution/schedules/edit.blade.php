@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>
            Edit {{ $schedule->chapters . ' ' . $schedule->parts }}
           </h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-4">
                   <div class="mb-3">
                      <label for="number" class="form-label">Number</label>
                      <input type="text" name="number" class="form-control @error('number') is-invalid @enderror" id="number"  value="{{ $schedule->number }}">
                      @error('number')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col-8">
                    <div class="mb-3">
                      <label for="name" class="form-label">Part</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $schedule->name }}">
                      @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <div class="mb-3">
                      <label for="legal_notice" class="form-label">Legal Notice</label>
                      <input type="text" name="legal_notice" class="form-control @error('legal_notice') is-invalid @enderror" id="legal_notice" value="{{ $schedule->legal_notice }}">
                      @error('legal_notice')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                   </div> 
                </div>
                <div class="col">
                    <div class="mb-3">
                      <label for="legal_notice_date" class="form-label">Legal Notice Date</label>
                      <input type="text" name="legal_notice_date" class="form-control @error('legal_notice_date') is-invalid @enderror" id="legal_notice_date" value="{{ $schedule->legal_notice_date }}">
                      @error('legal_notice_date')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    </div> 
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="body">Schedule Body</label>
                    @error('body')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                      @enderror
                    <textarea id="body" name="body" class="form-control @error('body') is-invalid @enderror" rows="10">
                        {{ $schedule->body }}
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

<script>
ClassicEditor
.create( document.querySelector( '#body' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection