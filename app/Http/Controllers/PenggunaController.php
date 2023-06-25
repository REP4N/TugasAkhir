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
}
