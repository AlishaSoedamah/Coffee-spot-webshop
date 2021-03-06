<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();

        return view('productsPage', compact('products'));
    }

    public function showProduct($id)
    {
        $singleProduct = Product::whereId($id)->first();
        // dd($product);
        return view('productPage', compact('singleProduct'));
    }
}
