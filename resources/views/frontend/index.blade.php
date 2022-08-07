@extends('layouts.front')

@section('title')

Welcome to Ecommerce

@endsection

@section('content')

@include('layouts.includes.slider')

<div class="py-5">

    <div class="container">
          <div class="row">
            @foreach ($featured_products as $prod)
        <div class="col-md-3">
            <div class="card">
                <img src="{{asset('assets/uploads/produts/'.$prod)}}" alt="product image">
                <div class="card-body">
                    <h5>{{$prod->name}}</h5>
                    <small>{{$prod->selling_price}}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

@endsection

