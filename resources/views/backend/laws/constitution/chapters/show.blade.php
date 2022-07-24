@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <div class="row">
               <div class="col-10">
                <h3 class="text-primary">
                    {!! $chapter->chapter_name !!}
                </h3>
                <p>
                    {!! $chapter->chapter_body !!}
                </p>
               </div>
               <div class="col-2">
                <div class="float-right">
                    <a href="{{ route('backend.chapters.edit', $chapter->id) }}" class="btn btn-sm btn-primary mr-0" title="Edit {{ $chapter->chapter_name }}">
                     <i class="fas fa-pen"></i>
                    </a>
                </div>
               </div>
           </div>
        </div>
        <div class="card-body">
           <div class="container-fluid">
           <div class="card">
            <div class="card-header">
               <!-- Trigger Create Part modal -->
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#create_part">
                    Create New Part
                </button>
                <!-- End Trigger modal -->
                @include('backend.laws.constitution.chapters.modals')
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered border-primary table-hover table-sm">
                   <thead>
                       <tr>
                           <th>Parts</th>
                           <th></th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                    @foreach($parts as $part)
                    <tr>
                       <td>
                           <a href="{{ route('backend.parts.show', $part->id) }}">
                               {{ $part->part_name }}
                           </a>
                       </td>
                       <td>
                        <?php 
                          $body =  Str::words($part->part_body, 20, '...');
                        ?>
                        {!! $body !!}
                        </td>
                       <td>
                           <a href="{{ route('backend.parts.edit', $part->id) }}" class="btn btn-sm btn-primary float-left">
                               <i class="fas fa-pen"></i>
                           </a>
                           <?php
                           

                           $slug = Str::slug('s-' . $part->created_at);
                           ?>
                           <!-- Delete Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#<?= $slug; ?>">
                              <i class="fas fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="<?= $slug; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-warning">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                    You are about to remove {{ $part->part_name }} from this Chapter. Are you sure you want to proceed ?
                                    </h5>
                                  </div>
                                  <div class="modal-footer">
                                    
                                    <form action="{{ route('backend.parts.destroy', $part->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger float-right">
                                        Yes
                                      </button>
                                    </form>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal -->
                       </td>
                    </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div> 
            </div>
            <div class="card-footer">
                {{ $parts->links() }}
            </div>       
          </div>
          </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>


<script>
ClassicEditor
.create( document.querySelector( '#part_description' ) )
.catch( error => {
console.error( error );
} );

ClassicEditor
.create( document.querySelector( '#part_part_description' ) )
.catch( error => {
console.error( error );
} );
</script>

@endsection