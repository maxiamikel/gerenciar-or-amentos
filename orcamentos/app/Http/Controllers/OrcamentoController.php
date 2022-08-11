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

    public function store(Request $request)
    {
        $orcamento = new Orcamento();

        $orcamento->descripcao = $request->descripcao;
        $orcamento->especificacao = $request->especificacao;
        $orcamento->cliente = $request->cliente;
        $orcamento->data_inicio = $request->data_inicio;
        $orcamento->previsao_entrega = $request->previsao_entrega;
        $orcamento->custo = $request->custo;

        $orcamento->save();

        return redirect("/");

    }
}
