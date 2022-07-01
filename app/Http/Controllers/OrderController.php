<?php

namespace App\Http\Controllers;

use App\Mail\ScamMail;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index($productId)
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_NUTth6TGEv2jV3m2SG2sgJjzN5n2Uw");

        //get your product from your id
        $product = Product::find($productId);
        if (!$product) {
            echo 'geen products';
            exit;
        }

        //Create
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "$product->price"
            ],
            "description" => "$product->name",
            "redirectUrl" => "http://127.0.0.1:8000",
            "webhookUrl"  => "https://www.google.nl",
            "redirectUrl" => "http://127.0.0.1:8000/scammed/$productId",
            "method" => ["ideal", "paypal", "creditcard"]
        ]);
        return redirect($payment->getCheckoutUrl());
    }

    public function scammed($productId)
    {
        //get your product from your id
        $product = Product::find($productId);

        Mail::to('alisha.soed@gmail.com')->send(new ScamMail($product));
        return view('scammed');
    }
}
