<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;


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

    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente-> nome = $request->nome;
        $cliente-> cpf = $request->cpf;
        $cliente-> endereco = $request->endereco;
        $cliente-> telefone = $request->telefone;
        $cliente-> email = $request->email;
        $cliente-> desconto = $request->desconto;

        $cliente->save();

        return redirect("/");
    }
}
