<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Testar;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.novo');
    }

    public function listar()
    {
        $clientes = Cliente::all();
        return view('clientes.lista',['clientes' => $clientes]);
    }
}
