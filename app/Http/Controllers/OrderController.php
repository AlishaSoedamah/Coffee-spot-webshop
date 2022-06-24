<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function index($productsId)
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_NUTth6TGEv2jV3m2SG2sgJjzN5n2Uw");

        //Create
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "$product->price"
            ],
            "description" => "$product->name",
            "redirectUrl" => "http://127.0.0.1:8000",
            "webhookUrl"  => "https://www.google.nl",
            "method" => ["ideal", "paypal", "creditcard"]
        ]);
        return redirect($payment->getCheckoutUrl());
    }
}
