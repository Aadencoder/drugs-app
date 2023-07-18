@extends('layouts.app')

@section('content')
<div class="container">
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
                        <h2 class="header mb-4">{{$drug->name}} Detail</h2>
                         <div class="rounded">
                             <div class="table-responsive table-borderless">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>Name</th>
                                             <th>Manufacturer</th>
                                             <th>Iingredients</th>
                                             <th>Dose Form</th>
                                             <th>Status</th>
                                             <th>Expiry Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="table-body">
                                         <tr class="cell-1">
                                             <td>{{$drug->name}}</td>
                                             <td>{{$drug->manufacturer}}</td>

                                             <td>{{$drug->ingredients}}</td>
                                             <td>{{$drug->dose_form}}</td>
                                             <td>{{$drug->approval_status}}</td>
                                             <td>{{ \Carbon\Carbon::parse($drug->expiration_date)->isoFormat('MMM Do YYYY')}}</td>
                                             <td>
                                               @if($drug->approval_status != 'approved')
                                                <a href="{{route('applicant.entity.edit', [$drug->id])}}">Edit</a>
                                                @endif
                                             </td>
                                         </tr>
                                         @if(isset($drug->note))
                                         <tr>
                                             <td>note : {{$drug->note}}</td>
                                         </tr>
                                         @endif
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