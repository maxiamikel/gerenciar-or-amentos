<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('funcionarios.novo');
    }

    public function listar()
    {
        return view('funcionarios.lista');
    }
}
