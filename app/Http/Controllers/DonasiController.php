<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonasiRequest;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonasiController
{
    public function index(){
        return view('pages.Donasi.page');
    }

    public function riwayat(){
        $data = [
            'donasiHistory' => Donasi::where('user_id', Auth::user()->id)->get()
        ];
        return view('pages.HistoryDonate.page', $data);
    }

    public function store(StoreDonasiRequest $request){
// \dd($request);
        $validate = $request->validated();

        $validate['user_id'] = Auth::user()->id;
        Donasi::Create($validate);

        return redirect()->route('riwayat')->with('success', 'Terima Kasih, Donasi anda berhasil dikirim');
    }

    public function destroy($id)
    {
        $donasi = Donasi::find($id);

        if (!$donasi) {
            return redirect()->route('riwayat')->with('error', 'Donasi tidak ditemukan');
        }

        $donasi->delete();

        return redirect()->route('riwayat')->with('success', 'Donasi anda berhasil dihapus');
    }
}
