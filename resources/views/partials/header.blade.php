<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(session()->has("user")){
    $total=ProductController::cartItem();
  }

?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand text-warning" href="/"><h3>LaravelEcommerce</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  text-white"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="/orders">Orders</a>
          </li>
          @if (!Session::has("user"))
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle  text-white" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
                  LogInAndRegister
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/login">login</a></li>
                  <li><a class="dropdown-item" href="/register">Register</a></li>
                </ul>

              </li>
            @else
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle  text-white" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
                {{Session::get("user")->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">logout</a></li>
              </ul>

            </li>
          @endif
         
        </ul>
        <form class="d-flex"  action="/search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="{{route('products.list')}}" class="mx-4 text-white" style="font-size: 18px;">cart  ({{$total}})</a>
      </div>
    </div>
  </nav>