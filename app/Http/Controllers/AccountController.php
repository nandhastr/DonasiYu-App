<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController
{
    public function index(){
        $data = [
            'profileItems' => User::all(),
        ];
        return view('pages.Account.index', $data);
    }
}
