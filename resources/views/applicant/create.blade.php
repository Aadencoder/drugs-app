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
          @if (Session::has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{Session::get('error_message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


          <div class="container">
            <header class="header">
              <h1 id="title" class="text-center">Add New Entity</h1>
              <p id="description" class="text-center">
                Thank you for taking the time to add new entity
              </p>
              @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </div>
            @endif
            </header>

            <div class="form-wrap"> 

             <form action="{{route('applicant.entity.store')}}"  method="POST" enctype="multipart/form-data">
              @csrf
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