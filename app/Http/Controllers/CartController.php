<?php

namespace App\Http\Controllers;

use App\Models\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //
    public function index()
    {
        return view('cartPage');
    }

    public function add($id)
    {
        $singleProduct = Product::whereId($id)->first();

        $product = [
            'id' => $singleProduct->id,
            'name' => $singleProduct->name,
            'price' => $singleProduct->price
        ];

        if (Session::has('cart')) {
            // $sessionProducts = = Session::get('cart')
        }

        // $singleProduct = Product::whereId($id)->first();
        // Session::put('cart', $singleProduct);

        // dd(Session::get('cart'));
    }

    public function remove()
    {
    }
}
