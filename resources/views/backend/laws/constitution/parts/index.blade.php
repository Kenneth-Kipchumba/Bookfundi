@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Parts Table</h3>
        </div>
        <div class="card-body">
           <div class="table-responsive">
              <table class="table table-bordered border-primary table-hover table-sm">
               <thead>
                   <tr>
                       <th>Parts</th>
                   </tr>
               </thead>
               <tbody>
                @foreach($parts as $part)
                <tr>
                   <td>
                       <a href="{{ route('backend.parts.show', $part->id) }}">
                           {{ $part->part_name }} - {{ $part->part_body }}
                       </a>
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
@endsection