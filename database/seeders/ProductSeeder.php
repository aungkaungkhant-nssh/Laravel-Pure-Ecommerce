<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
            [
            "name"=>"Oppo Phone",
            "price"=>"280000",
            "description"=>"Find oppo phone stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection.",
            "category"=>"Phone",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYHkM_-jMEn-s2MEx5NvdMMUcwMHFDH7MuJQ&usqp=CAU",
            ],
            [
            "name"=>"Mi Phone",
            "price"=>"200000",
            "description"=>" Xiaomi is a privately owned company that designs, develops, and sells smartphones, an Android-based OS, and other consumer electronics.",
            "category"=>"Phone",
            "gallery"=>"hhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn-RuE99hR2v72qEk7kIbTRO5gTA6y8yTwqw&usqp=CAU",
            ],
            [
            "name"=>"LG TV",
            "price"=>"250000",
            "description"=>"Discover LG Smart TVs. With Stunning Displays, Clear Sound, & Innovative Technology, like LG ThinQ AI, They Will Transform Your Favorite Home Entertainment.",
            "category"=>"TV",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/91zs--uVuzL._SL1500_.jpg",
            ],
            [
            "name"=>"Samsaung TV",
            "price"=>"300000",
            "description"=>"Samsung helps you discover a wide range of home electronics with cutting-edge technology including smartphones, tablets, TVs, home appliances and more",
            "category"=>"TV",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgliisiBBs-4jtkMYHpv-rnU_rveIjhYpnBQ&usqp=CAU",
            ],
            [
            "name"=>"Samsaung fridge",
            "price"=>"450000",
            "description"=>"Discover Samsung's refrigerators & smart fridges, developed with the latest technology in a range of sizes and designs. Find your perfect fridge today.",
            "category"=>"fridge",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYLfozDtu0OuWgzWFQMe58ZrwKZ1N_Cc3eGw&usqp=CAU"
            ],
        ]);
    }
}
