@extends('layouts.admin')
@section('content')

{{-- <div class="mb-3 row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
  </div>
</div>
<div class="mb-3 row">
  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" id="inputPassword">
  </div>
</div> --}}

<form
        action="{{ route('adminpage.admintype_product_add') }}"
        method="POST"
                    class="forms-sample">
                     @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text"  name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      
                      {{-- <div class="form-group">
                        <label for="exampleInputPrice">Price</label>
                        <input type="text"  name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputAmount">Amount</label>
                        <input type="number"  name="amount" class="form-control" id="exampleInputAmount" placeholder="Amount">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Product details</label>
                        <textarea class="form-control" name="detail" id="exampleTextarea1" rows="4"></textarea>
                      </div> --}}
                      <br>
                      <button type="submit" class="btn btn-primary mr-2">Add</button>
                      <button type="reset" class="btn btn-primary mr-2">Reset</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>

  @stop