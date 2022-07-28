@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Chapters</h3>
           <a href="{{ route('backend.chapters.create') }}" class="btn btn-success btn-sm float-right" data-toggle="tooltip" title="Create New Chapter">
            new chapter
           </a>
        </div>
        <div class="card-body">
           <div class="table-responsive">
              <table class="table table-bordered border-primary table-hover table-sm">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th></th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                @foreach($chapters as $chapter)
                <tr>
                   <td>
                           {{ $chapter->chapter_name }}
                   </td>
                   <td>
                    <a href="{{ route('backend.chapters.show', $chapter->id) }}">
                        <?php 
                          $body =  Str::words($chapter->chapter_body, 20, '...');
                        ?>
                        {!! $body !!}
                    </a>
                    </td>
                   <td>
                       <a href="{{ route('backend.chapters.edit', $chapter->id) }}" class="btn btn-sm btn-primary float-left">
                           <i class="fas fa-pen"></i>
                       </a>
                       <?php
                       

                       $slug = Str::slug('s-' . $chapter->created_at);
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
                                You are about to remove 
                                <span class="bg-primary">
                                    {{ $chapter->chapter_name }}    
                                </span> from the Constitution. Are you sure you want to proceed ?
                                </h5>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="{{ route('backend.chapters.destroy', $chapter->id) }}" method="POST">
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
            {{ $chapters->links() }}
        </div>

        

       
    </div>
  </div>
</div>
@endsection