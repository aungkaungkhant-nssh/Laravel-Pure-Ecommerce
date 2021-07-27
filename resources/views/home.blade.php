@extends('layouts.master')
@section('home')
    @section('content')
    {{-- {{$products}} --}}
    <div id="carouselExampleControls" class="carousel slide p-5 cs" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
                <div class="carousel-item {{$product["id"]==1?'active':''}}">
                     <img src="{{$product->gallery}}" class="d-block " alt="..." style="height:330px;margin-left:200px;width:300px;">
                     <div class="carousel-caption d-none d-md-block" style="background-color: #2c3e50;opacity:.8;color:#2ecc71">
                        <h5>{{strtoupper($product["name"])}}</h5>
                        <p style="letter-spacing: 1px">{{$product["description"]}}</p>
                    </div>
                 </div>
               
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    @endsection
