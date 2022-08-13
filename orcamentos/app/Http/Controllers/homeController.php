<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orcamento;

class homeController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::all();
        $orcamentos = Orcamento::all();
        return view('home', ['orcamentos' => $orcamentos]);
    }
}
