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
}
