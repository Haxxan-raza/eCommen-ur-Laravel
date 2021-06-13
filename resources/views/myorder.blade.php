@extends('master')
@section('content')
<div class=" custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h3>Orders List </h3>

   @foreach($orders as $item)
   <div class=" row searched-item cart-list-divider">
  <div class="col-sm-3">

  <a href="detail/{{$item->id}}">
      <img  class="trending-img"src="{{$item->Gallery}}" >
      </a>
  </div>
  <div class="col-sm-3">
     <div class="">
        <h3>{{$item->name}}</h3>
        <h5>Delivery Status: {{$item->status}}</h5>
        <h5>Payment Status: {{$item->payment_status}}</h5>
        <h5>Payment method: {{$item->payment_method}}</h5>
        <h5>Delivery Address: {{$item->address}}</h5>
        <h5>Delivery Price: {{$item->price}}</h5>
    </div>
  </div>
  <div class="col-sm-3">

  </div>
    </div>
    @endforeach
    
    </div>
</div>
</div>
@endsection('content')