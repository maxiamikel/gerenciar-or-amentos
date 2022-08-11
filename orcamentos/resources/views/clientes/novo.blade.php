@extends('layouts.main')
@section('title', 'Criar novo cliente')
@section('content')

<h1>Novo cliente</h1>

<div id="teste" class="col-md-6 offest-md-3">
    <form action="/clientes" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label for="cliente">cliente</label>
            <input type="text" class="form-control" name="cliente">
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar">
        </div>

</form>
</div>

@endsection