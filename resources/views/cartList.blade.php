@extends('layouts.master')
    @section('Product Lists')
    @section('content')
        <div class="p-5" style="width: 1000px;margin:10px auto;">
            <a href="" class="btn btn-info">Buy</a>
                @if (Session::has("remove"))
                    <div class="alert alert-success my-5">{{Session::get("remove")}}</div>
                @endif
                @foreach ($carts as $cart)
                    <div class="d-flex align-items-center justify-content-around my-5">
                        <img src="{{$cart->gallery}}" alt="">
                        <div class="mx-5">
                            <h5>{{$cart->name}}</h5>
                            <p>{{$cart->description}}</p>
                        </div>
                        <a href="/removeCart/{{$cart->cart_id}}" class="btn btn-warning">Remove Cart</a>
                    </div>
                @endforeach
            <a href="" class="btn btn-info">Buy</a>
        </div>
    @endsection