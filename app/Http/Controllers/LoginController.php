<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function postUser(Request $request)
    {
        $formData = $request->all();
        User::create($formData);
    }
}
