<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestarController extends Controller
{
    public function index()
    {
        return view('clientes.teste');
    }
    
}
