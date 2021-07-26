@extends('layouts.master')
@section("login")
 @section('content')
 <div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-info">Please Login</h3>
                </div>
                <div class="card-body">
                   @if (Session::has("error"))
                       <div class="alert alert-danger">{{Session::get("error")}}</div>
                   @endif
                   <form action="/" method="post">
                       @csrf
                       <div class="mb-3">
                           <label for="" class="mb-2">Enter Your Email</label>
                           <input type="email" name="email" id="" class="form-control">
                       </div>
                       <div class="mb-4">
                           <label for="" class="mb-2">Enter Your Password</label>
                           <input type="password" name="pass" id="" class="form-control">
                           
                       </div>
                       <div class="d-flex justify-content-end">
                           <input type="submit" class="btn btn-info text-white">
                       </div>
                   </form>
                </div>
               
            </div>
        </div>
    </div>
</div>
 @endsection