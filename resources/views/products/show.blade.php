@extends('products.layout')
 
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Show Movies</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
      </div>
   </div>
</div>
 
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Movie Name:</strong>
         {{ $product->movie_name }}
      </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Movie Released Year:</strong>
         {{ $product->movie_released_year }}
      </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Movie Description:</strong>
         {{ $product->movie_description }}
      </div>
   </div>
</div>
@endsection