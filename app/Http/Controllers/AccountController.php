<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController
{
    public function index(){
        return view('pages.Account.index');
    }
}
