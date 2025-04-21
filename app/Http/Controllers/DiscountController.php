<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    private function isDiscountValid($discount)
    {
        return $discount > 0 && $discount <= 50;
    }
    public function calculatedDiscount($price, $discount)
    {
        if ($this->isDiscountValid($discount)) {
            $finalprice = $price - ($price * $discount / 100);
            return "Price after discount: " . $finalprice;
        }
        return "Invalid discount";
    }
}
