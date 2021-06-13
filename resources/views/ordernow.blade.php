@extends('master')
@section('content')
<div class=" custom-product">
<div class="col-sm-6">
<table class="table">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} Ruppes</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Ruppes</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
        
      </tr>
    </tbody>
  </table>
  <form action="orderplace" method="POST" >
  <div class="form-group">
  @csrf
    <textarea placeholder="Enter your Address" name="address"  class="form-control" ></textarea> 
  </div>
  <div class="form-group">
  <label for="">Payment Method</label>
    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>JazzCash Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>Delivery 0n Payment</span></p>
  </div>
  
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>
</div>
@endsection('content')