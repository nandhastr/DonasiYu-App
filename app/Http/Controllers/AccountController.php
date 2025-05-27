<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $data = [
            'profileItems' => User::all(),
        ];
        return view('pages.Account.index', $data);
    }

    public function edit()
    {
        $data = [
            'user' => Auth::user(),
        ];
        return view('pages.Account.editAccount.index', $data);
    }

    public function update(Request $request)
    {
        // \dd($request->all());
        $data = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'nullable|min:8',
        ]);

        $user = Auth::user();

        $user->name   = !empty(trim($data['name'] ?? '')) ? $data['name'] : $user->name;
        $user->email  = !empty(trim($data['email'] ?? '')) ? $data['email'] : $user->email;
        $user->phone  = !empty(trim($data['phone'] ?? '')) ? $data['phone'] : $user->phone;
        $user->alamat = !empty(trim($data['alamat'] ?? '')) ? $data['alamat'] : $user->alamat;

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/image/users', $fileName);
            $user->foto = $fileName;
        }
        $user->save();

        return redirect()->route('account')->with('success', 'Profil berhasil diperbarui!');
    }
}
