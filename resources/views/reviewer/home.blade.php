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
                                         <td>
                                            <form action="{{route('reviewer.entity.updateStatus', [$drug])}}"  method="POST" enctype="multipart/form-data">
                                              @csrf
                                              @method('PUT')
                                              <select name="approval_status" id="statusChange" >
                                                <option value="pending"  {{ $drug->approval_status == old('approval_status', 'pending') ?  'selected' : ''}} disabled>Pending</option>
                                                <option value="expired"  {{ $drug->approval_status == old('approval_status', 'expired') ?  'selected' : ''}} disabled>Expired</option>
                                                <option value="approved"  {{ $drug->approval_status == old('approval_status', 'approved') ?  'selected' : ''}}>Approved</option>
                                                <option value="rejected"  {{ $drug->approval_status == old('approval_status', 'rejected') ?  'selected disabled' : ''}} data-id="{{$drug->id}}">Rejected</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($drug->expiration_date)->isoFormat('MMM Do YYYY')}}</td>
                                    <td>
                                        @if($drug->approval_status != 'approved')
                                        <a href="{{route('reviewer.entity.edit', [$drug->id])}}">Edit</a>
                                        @endif
                                        <a href="{{route('reviewer.entity.show', [$drug->id])}}">View</a>
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
    
    @if(!empty($drugs))
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Note for rejection</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       <form action="{{route('reviewer.entity.updateStatus')}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="approval_status" value="rejected">
                            <input type="hidden" name="id" id="drug_id">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Note</label>
                                    <textarea  id="note" class="form-control  @error('note') is-invalid @enderror" name="note" placeholder="Enter note for rejection..." required="required"></textarea>
                                </div>
                              </div>
                            </div>
                          
                          
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                          <div class="row">
                            <div class="col-md-4">
                              <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                          </div>
                        </form>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
@endif
@endsection 