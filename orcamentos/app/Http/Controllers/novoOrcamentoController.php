<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class novoOrcamentoController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('orcamentos.novo',['clientes' => $clientes]);
    }
}
