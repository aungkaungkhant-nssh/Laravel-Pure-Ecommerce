@extends('layouts.master')
 @section('Register')
 @section('content')
     <div class="container my-5">
         <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="card">
                     <div class="card-header">
                         <h3 class="text-center text-info">Please Register</h3s>
                     </div>
                     <div class="card-body">
                        @if (Session::has("success"))
                            <div class="alert alert-success">{{Session::get("success")}}</div>
                        @endif
                        @if(Session::has("nosuccess"))
                              <div class="alert alert-danger">{{Session::get("nosuccess")}}</div>
                        @endif
                        <form action="/addUser" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="mb-2">Enter Your Name</label>
                                <input type="text" name="name" id="" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger my-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Enter Your Email</label>
                                <input type="email" name="email" id="" class="form-control">
                                @error('email')
                                    <div class="alert alert-danger my-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Enter Your Password</label>
                                <input type="password" name="password" id="" class="form-control">
                                @error('password')
                                    <div class="alert alert-danger my-2">
                                        {{$message}}
                                    </div>
                                @enderror
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
     
 