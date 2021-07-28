@extends('layouts.master')
@section('Product Detail')
    @section('content')
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">
                           <img src="{{$product->gallery}}" alt="" style="height:330px;margin-left:150px;width:300px;">
                       </div>
                       <div class="card-body">
                           <h5>Product Name : <span  style="color:#CAD3C8;font-size:18px;">{{$product->name}}</span></h5>
                           <h5 class="mt-3">Product Title : <span  style="color:#b2bec3;font-size:15px;letter-spacing:1px;">{{$product->description}}</span></h5>
                          <h5 class="mt-3 mb-4">Price : <span  style="color:#b2bec3;font-size:18px;letter-spacing:1px;">$ {{$product->price}}</span></h5>
                          <div class="d-flex justify-content-between">
                                {{-- <div></div> --}}
                                <a href="/" class="btn btn-warning">Back</a>
                                <a href="/addcart/{{$product->id}}" class="btn btn-primary">Add To Cart</a>
                          </div>
                          
                       </div>
                   </div>
                </div>
            </div>
        </div>
    @endsection