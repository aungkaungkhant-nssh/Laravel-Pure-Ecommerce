<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

   public function index(){
       $products=Product::all();
     return view("products",["products"=>$products]);
   }
   public function detail($id){
      $product=Product::find($id);
      return view("detail",["product"=>$product]);
   }
   public function search(Request $req){
      // Product::where("name",'LIKE',"%{$search}%")->get();
      $products=Product::where("name","LIKE","%{$req->name}%")->get();
      return view("search",["products"=>$products]);
   }
   public function addCart($id){
         $userId=session()->get("user")->id;
         $productId=Product::find($id)->id;
         Cart::create(["user_id"=>$userId,"product_id"=>$productId]);
         return redirect()->back();
   }
   public static function cartItem(){
      $userId=session()->get("user")->id;
      return Cart::where("user_id",$userId)->count();
   }
   public function cartList(){
      $userId=session()->get("user")->id;
      $carts=DB::table('carts')
            ->join("products","carts.product_id","=","products.id")
            ->where("user_id",$userId)
            ->select("products.*","carts.id as cart_id")
            ->get();
      return view("cartList",compact("carts"));
   }
   public function removeCart($id){
      Cart::destroy($id);
      return redirect()->back()->with("remove","remove cart from cart list");
   }  
}
