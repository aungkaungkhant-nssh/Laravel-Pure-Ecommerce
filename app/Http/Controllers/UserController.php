<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUser(Request $request){
        $validator=$request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required|min:8"
        ]);
        if($validator){
            $password=Hash::make($request->password);
            User::create(["name"=>$request->name,"email"=>$request->email,"password"=>$password]);
            return redirect()->back()->with("success","Add User Success");
        }else{
            return redirect()->back()->with("nosuccess","Add User Not Success");
        }
    }
}
