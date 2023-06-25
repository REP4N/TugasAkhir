<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function index()
    {
        return view('Pengguna.register');
    }

    public function simpanRegister(Request $request)
    {
        $this->validate($request, [
            'full name' => 'required|string',
            'email'     => 'required|email|string',
            'password'  => 'required|string',
        ]);
    }
}
