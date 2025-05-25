<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController
{
    public function index()
    {
        return view('pages.Auth.Register');
    }
}
