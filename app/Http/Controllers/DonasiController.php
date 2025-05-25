<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController
{
    public function index(){
        return view('pages.Donasi.page');
    }

    public function riwayat(){
        return view('pages.HistoryDonate.page');
    }
}
