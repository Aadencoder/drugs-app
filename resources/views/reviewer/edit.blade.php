@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <div class="container">
            <header class="header">
              <h1 id="title" class="text-center">Update Entity</h1>
              <p id="description" class="text-center">
                Thank you for taking the time to help us improve the platform
              </p>
            </header>
            <div class="form-wrap"> 
             <form action="{{route('reviewer.entity.update', [$drug])}}"  method="POST" enctype="multipart/form-data">
              @csrf
               @method('PUT')
              @include('applicant.form')
              <div class="row">
                <div class="col-md-4">
                  <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </div>
            </form>
          </div>  
        </div>

      </div>
    </div>
  </div>
</div>
</div>


@endsection 