@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
   <div class="col-md-10">
   </div>
   <div class="col-md-2">
    <a href="{{route('applicant.add.entity')}}" class="btn btn-primary">Add new entity</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">


        <div class="panel panel-default">
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <div class="container-fluid mt-5">

                 <div class="d-flex justify-content-center row">
                     <div class="col-md-12">
                        <h2 class="header mb-4">Entity Listings</h2>
                         <div class="rounded">
                             <div class="table-responsive table-borderless">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th class="text-center">#</th>
                                             <th>Name</th>
                                             <th>Manufacturer</th>
                                             <th>ingredients</th>
                                             <th>Dose Form</th>
                                             <th>Status</th>
                                             <th>Expiry Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="table-body">
                                         <tr class="cell-1">
                                             <td class="text-center">1</td>
                                             <td>Metfor G2</td>
                                             <td>Copid Ins TU, Nepal</td>

                                             <td>{{ \Illuminate\Support\Str::limit(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50, $end='...') }}</td>
                                             <td>tablet</td>
                                             <td>Approved</td>
                                             <td>2024-01-21</td>
                                             <td>Edit</td>
                                         </tr>

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>

@endsection 