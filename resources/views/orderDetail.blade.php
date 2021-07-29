@extends('layouts.master')
    @section('Order Deail')
    @section('content')
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">You Total Amount is : <span style="color:#27ae60;font-size:23px">${{$total}}</span></h3>
                        </div>
                        <div class="card-body mt-3">
                            <form action="{{route('product.order')}}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <textarea name="address" id="" cols="30" class="form-control" placeholder="Enter Your Address"></textarea>
                                </div>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone">
                                </div>
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="mb-2">
                                    <label for="">Payment Methods:</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="payment" value="kbz">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      KBZ
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="payment" value="wave">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Wave Pay
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="payment" value="paypay">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Pay pay
                                    </label>
                                  </div>
                                  <div class="mb-4">
                                    <input class="form-check-input" type="checkbox" name="delivery" id="flexRadioDefault2" value=1>
                                    <label for="">OnDelivery: You coast : <span class="text-danger">$10</span></label>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="/" class="btn btn-warning">Shopping</a>
                                    <input type="submit" value="Orders" class="btn  btn-info" style="float: right">
                                </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>   
    @endsection
        