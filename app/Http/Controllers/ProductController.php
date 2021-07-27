<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
}
