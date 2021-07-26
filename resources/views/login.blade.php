@extends('layouts.master')
 @section('Login')
 @section('content')
     <div class="container my-5">
         <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="card">
                     <div class="card-header">
                         <h3 class="text-center text-info">Please Login</h3s>
                     </div>
                     <div class="card-body">
                        <form action="/addUser" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="mb-2">Enter Your Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Enter Your Email</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Enter Your Password</label>
                                <input type="text" name="name" id="" class="form-control">
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
     
 