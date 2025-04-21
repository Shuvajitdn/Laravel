<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtcontroller extends Controller
{
    public function products($productName = null)
    {
        $products = [
            ["Product_name" => "Pencil Box", "Price" => "100"],
            ["Product_name" => "Pen", "Price" => "10"],
            ["Product_name" => "Eraser", "Price" => "5"],
            ["Product_name" => "Sharpner", "Price" => "5"],
            ["Product_name" => "Scale", "Price" => "10"]
        ];
        $discountPrice = 0;
        foreach ($products as $product) {
            if ($product["Product_name"] == $productName) {
                $price = $product["product_price"];
                $discountPrice = $price - 0.1 * $price;
            }
        }
    }
}
