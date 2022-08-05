<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orcamento;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::all();
        return view('orcamentos.lista',['orcamentos' => $orcamentos]);
    }
}
