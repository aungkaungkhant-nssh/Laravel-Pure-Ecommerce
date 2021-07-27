@extends('layouts.master')
@section('home')
    @section('content')
    {{-- Start carousel  --}}
    <div id="carouselExampleControls" class="carousel slide p-5 cs" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
              <div class="carousel-item {{$product["id"]==1?'active':''}}">
                  <a href="/detail/{{$product->id}}">
                     <img src="{{$product->gallery}}" class="d-block " alt="..." style="height:330px;margin-left:200px;width:300px;">
                     <div class="carousel-caption d-none d-md-block" style="background-color: #2c3e50;opacity:.8;color:#2ecc71">
                         <h5>{{strtoupper($product["name"])}}</h5>
                          <p style="letter-spacing: 1px">{{$product["description"]}}</p>
                    </div>
                  </a>
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
      {{-- End Carousel --}}
      {{-- Start Treding Products --}}
          <div class="treding-products p-3">
              <div class="container">
                <h2 class="text-center mb-4">Treding Products</h2>
                <div class="d-flex justify-content-between">
                    @foreach ($products as $p)
                    <a href="/detail/{{$p->id}}">
                        <div class="mt-3">
                          <h5 class="text-center">{{strtoupper($p["name"]) }}</h5>         
                        </div>
                        <div class="mt-3">
                          <img src="{{$p->gallery}}" alt="" style="width:150px;height:130px">
                          <h5 class="text-center mt-3" style="color:#95a5a6;">$ {{$p->price}}</h5>
                        </div>
                    </a>      
                    @endforeach
                </div>
              </div>
          </div>
      {{-- End Treding Products --}}
      @endsection
