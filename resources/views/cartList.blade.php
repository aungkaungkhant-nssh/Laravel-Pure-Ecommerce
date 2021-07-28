@extends('layouts.master')
    @section('Product Lists')
    @section('content')
        <div class="p-5" style="width: 1000px;margin:10px auto;">
            <a href="" class="btn btn-info">Buy</a>
                @foreach ($carts as $cart)
                    <div class="d-flex align-items-center justify-content-around my-5">
                        <img src="{{$cart->gallery}}" alt="">
                        <div class="mx-5">
                            <h5>{{$cart->name}}</h5>
                            <p>{{$cart->description}}</p>
                        </div>
                        <a href="" class="btn btn-warning">Remove Cart</a>
                    </div>
                @endforeach
            <a href="" class="btn btn-info">Buy</a>
        </div>
    @endsection