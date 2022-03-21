@extends('backend.layout.main')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h3>Courts Table</h3> 
        </div>
        <div class="card-body">
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Court Name</th>
                       <th>Court Level</th>
                       <th>Location</th>
                       <th>Country</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                   </tr>
               </tbody>
           </table> 
        </div>
        <div class="card-footer">
            
        </div>
    </div>
  </div>
</div>
@endsection