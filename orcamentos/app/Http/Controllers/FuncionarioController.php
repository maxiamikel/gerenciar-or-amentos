<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('cunfionarios.novo');
    }

    public function listar()
    {
        return view('funcionarios.lista');
    }
}
