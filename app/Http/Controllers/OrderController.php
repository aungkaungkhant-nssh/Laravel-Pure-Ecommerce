<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\TotalAmt;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;        
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
      public function index(Request $request){
            $userId=$request->session()->get("user")->id;
            $orders=DB::table('orders')
            ->join("products","orders.product_id","=","products.id")
            ->where("orders.user_id", $userId)
            ->get();
            return view("totalOrders",["orders"=>$orders]);
      }
       public function order(OrderRequest $request){
        $userId=$request->session()->get("user")->id; 
         $carts=Cart::where("user_id",$userId)->get();
        foreach($carts as $cart){
              Order::create(["user_id"=>$userId,"product_id"=>$cart->product_id,"address"=>$request->address,"phone"=>$request->phone,"payment_method"=>$request->payment,"on_delivery"=>$request->delivery?1:0,"payment_status"=>0]);
        }
        Cart::where("user_id",$userId)->delete();
        return view("Thank");
   }
}
