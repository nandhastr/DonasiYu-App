<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

class RegisterController
{
    public function index()
    {
        return view('pages.Auth.Register');
    }

    public function store(RegisterUserRequest $request){
// dd($request);
        $validate = $request->validated();
// \dd($validate);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = Str::uuid(). '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/image/users', $fileName);

            $validate['foto'] = $fileName;
        
        }
        $validate['password'] = Hash::make($validate['password']);
        
        User::create($validate);

        return redirect('login')->with('success', 'Pendaftaran Berhasil, Silahkan Login');
        
    }
}
