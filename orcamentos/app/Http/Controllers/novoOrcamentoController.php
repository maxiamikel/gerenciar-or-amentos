<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class novoOrcamentoController extends Controller
{
    public function index()
    {
        return view('orcamentos.novo');
    }
}
