@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
   <div class="col-md-10">
   </div>
   <div class="col-md-2">
    <a href="{{route('applicant.entity.create')}}" class="btn btn-primary">Add new entity</a>
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
                                             <th>Ingredients</th>
                                             <th>Dose Form</th>
                                             <th>Status</th>
                                             <th>Expiry Date</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="table-body">
                                        @if(!empty($drugs))
                                        @foreach($drugs as $key => $drug )
                                         <tr class="cell-1">
                                             <td class="text-center">{{$key+1}}</td>
                                             <td>{{$drug->name}}</td>
                                             <td>{{$drug->manufacturer}}</td>

                                             <td>{{ \Illuminate\Support\Str::limit($drug->ingredients, 50, $end='...') }}</td>
                                             <td>{{$drug->dose_form}}</td>
                                             <td>{{$drug->approval_status}}</td>
                                             <td>{{ \Carbon\Carbon::parse($drug->expiration_date)->isoFormat('MMM Do YYYY')}}</td>
                                             <td>
                                                @if($drug->approval_status != 'approved')
                                                <a href="{{route('applicant.entity.edit', [$drug->id])}}">Edit</a>
                                                @endif
                                            <a href="{{route('applicant.entity.show', [$drug->id])}}">View</a>
                                             </td>
                                         </tr>
                                         @endforeach
                                         @else
                                         <p>No Data Found</p>
                                         @endif
                                     </tbody>
                                 </table>
                                 {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
                                     {!! $drugs->links() !!}
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
</div>

@endsection 