@extends('layouts.admin')
@section('content')
 <div class="card">
       <div class="card-header">
        <h4> Peoduct Page</h4>
        <hr>
       </div>
      <div class="card-body">

      <table class="table">
       <thead>
        <tr>
            <th>id</th>
            <th>Category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Original price</th>
            <th>Selling price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
       </thead>

       <tbody>
        @foreach ($product as $item )
          <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->cate_id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->description}}</td>
             <td>{{$item->original_price}}</td>
             <td>{{$item->selling_price}}</td>

             <td>
                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" alt="Image here">
            </td>
             <td>

                <a href="{{ url('edit-prod/'.$item->id) }}"  class="btn btn-primary">Edit</a>
                <button class="btn btn-danger">Delete</button>

            </td>

          </tr>

          @endforeach
       </tbody>

      </table>


 </div>


@endsection
