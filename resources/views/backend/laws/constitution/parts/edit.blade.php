@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>
            Edit {{ $part->part_name }}
           </h3>
        </div>
        <div class="card-body">
           <form action="{{ route('backend.parts.update', $part->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
               <div class="mb-3">
                    <label for="part_name" class="form-label">Name</label>
                    <input type="text" name="part_name" class="form-control @error('part_name') is-invalid @enderror" id="part_name" value="{{ $part->part_name }}">
                    @error('part_name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="part" class="form-label">Body</label>
                    <input type="text" name="part" class="form-control @error('part') is-invalid @enderror" id="part" value="{{ $part->part }}">
                     @error('part')
                     <p class="text-danger">
                        {{ $message }}
                     </p>
                     @enderror
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