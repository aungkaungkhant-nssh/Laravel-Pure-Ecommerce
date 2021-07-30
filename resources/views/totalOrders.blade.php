@extends('layouts.master')
      @section('Order Total')
      @section('content')
          <div class="container">
             <div class="row">
                 @foreach ($orders as $order)
                     <div class="col-md mt-4">
                         <h1>{{$order->name}}</h1>
                         <img src="{{$order->gallery}}" alt="" class="mt-3">
                         <p class="text-start mt-3">{{$order->payment_method}}</p>
                         @if (!$order->payment_status)
                             <h5>No delivery</h5>
                         @else
                             <h5> delivery</h5>
                         @endif
                     </div>
                 @endforeach
             </div>
          </div>
      @endsection
          
      