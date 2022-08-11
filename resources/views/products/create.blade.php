@extends('products.layout')
 
@section('content')
 
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Add New Movies</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
      </div>
   </div>
</div>
 
@if ($errors->any())
<div class="alert alert-danger">
   <strong>Whoops!</strong> There were some problems with your input.<br><br>
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
 
<form action="{{ route('products.store') }}" method="POST">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Movie Name:</strong>
            <input type="text" name="movie_name" class="form-control" placeholder="Movie Name">
         </div>
      </div>
       
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Movie Released Year:</strong>
            <input type="text" name="movie_released_year" class="form-control" placeholder="Year">
         </div>
      </div>
 
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Movie Description:</strong>
            <textarea class="form-control" style="height:150px" name="movie_description" placeholder="Movie Description"></textarea>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
</form>
 
@endsection