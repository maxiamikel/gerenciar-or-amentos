@extends('layouts.main')
@section('title', 'SGO - Novo Orcamento')
@section('content')

    <div id="novo-orcamento" class="container col-md-6 offest-md-3">
        <h1>Criar novo orçamento</h1>
        <form action="/orcamentos" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="titulo"> Descrição: </label>
                <textarea class="form-control" id="descripcao" name="descripcao" placeholder="Breve descrição do orçamento"> </textarea>
            </div>

            <div class="form-group">
                <label for="especificacao">Escecificação do cliente:  </label>
                <input type="text" class="form-control" id="especificacao" name="especificacao" placeholder="Digite a especicação do cliente" />
            </div>

            <div class="form-group">
                <label for="cliente"> Cliente </label>
                <select name="cliente" id="cliente" class="form-control">
                    <option>Selecionar um(a) cliente</option>

                    @foreach($clientes as $cliente)
                        <option value={{$cliente->id}}> {{$cliente->cpf}} / {{$cliente->nome}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="entrega"> Data contratação: </label>

                <input type="date" class="form-control" id="inicio" name="data_inicio" > 
            </div>

            <div class="form-group">
                <label for="entrega"> Previsão de entrega: </label>
                <input type="date"  class="form-control" id="entrega" name="previsao_entrega"> 
            </div>

            <div class="form-group">
                <label for="custo"> Custo: </label>
                <input type="text" class="form-control" id="custo" name="custo" placeholder="" />
            </div>
            <input type="hidden" name="estado" value="0">
            <input type="hidden" name="cliente" id="cliente" value="Cliente" >
            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="" name="" value="Salvar" />
            </div>
             
        </form>
    </div>

@endsection