<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        // Fungsi ini bertugas untuk menampilkan View login-form.
        return view('login-form');
    }

    public function login(Request $request)
    {
        // 1. Rule Validasi
        $request->validate([
            'name'     => 'required|max:10',
            'password' => [
                'required',
                'min:3',
            ],
        ]);
        $nim = '2455301194';
        if ($request->name == $nim && $request->password == $nim) {
            $pageData = [
                'name'    => $request->name,
                'status'  => 'success',
                'message' => 'Login berhasil! Username dan Password Anda sesuai dengan NIM.',
            ];
            return redirect('/auth')->with('status', 'success');

        } else {
            return redirect('/auth')->with('status', 'error')->withInput();
        }
    }
}
