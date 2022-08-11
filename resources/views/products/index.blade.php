@extends('products.layout')
 
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Laravel 9 CRUD Movies</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-success" href="{{ route('products.create') }}">Create New Movies</a>
      </div>
   </div>
</div>
 
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
 
<table class="table table-bordered">
    <thead>
       <tr>
          <th>Movie No.</th>
          <th>Movie Name</th>
          <th>Movie Year Released</th>
          <th>Movie Description</th>
          <th width="280px">Action</th>
       </tr>
    </thead>
    
   <tbody>
       @foreach ($products as $product)
           <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $product->movie_name }}</td>
              <td>{{ $product->movie_released_year }}</td>
              <td>{{ $product->movie_description }}</td>
              <td>
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                </td>
           </tr>
       @endforeach
    </tbody>
</table>
 
{!! $products->links() !!}
 
@endsection