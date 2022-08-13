@extends('layouts.main')
@section('title', 'Criar novo cliente')
@section('content')

<div id="novo-orcamento" class="container col-md-6 offest-md-3">
        <h1>Cadastrar cliente</h1>
        <form action="/clientes" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="titulo"> Nome </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do cliente">
            </div>

            <div class="form-group">
                <label for="cliente">CPF</label>
                <input type="text" class="form-control" name="cpf" onkeypress="$(this).mask('000.000.000-00');">
            </div>

            <div class="form-group">
                <label for="cliente">Endereco</label>
                <input type="text" class="form-control" name="endereco" placeholder="Endereco">
            </div>

            <div class="form-group">
                <label for="cliente">Telefone</label>
                <input type="tel" class="form-control" name="telefonr" placeholder="Informe o numero de telefone">
            </div>

            <div class="form-group">
                <label for="cliente">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Informe o email">
            </div>


            <div class="form-group" id="control-form">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
</form>
</div>

@endsection