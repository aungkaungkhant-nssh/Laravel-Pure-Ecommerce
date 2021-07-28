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
                            <form action="">
                                <div class="input-group mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="input-group mb-4">
                                    <textarea name="address" id="" cols="30" class="form-control" placeholder="Enter Your Address"></textarea>
                                </div>
                                <div class="input-group mb-4">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone">
                                </div>
                                <div class="mb-2">
                                    <label for="">Payment Methods:</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="kbz" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      KBZ
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="wave" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Wave Pay
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="pay" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Pay pay
                                    </label>
                                  </div>
                                  <div class="mb-4">
                                    <input class="form-check-input" type="checkbox" name="delivery" id="flexRadioDefault2">
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
        