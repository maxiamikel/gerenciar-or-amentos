@extends('layouts.main')
@section('title', 'SGO Listagem dos orçamentos')
@section('content')
    <h1> Orçamentos</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">REQUISITO</th>
      <th scope="col">ESPPECIFICAÇAO</th>
      <th scope="col">CLIENTE</th>
      <th scope="col">DATA ORC</th>
      <th scope="col">PREVISAO ENTREGA</th>
      <th scope="col">ESTADO</th>
      <th scope="col">CUSTO</th>
      <th scope="col">AÇAO</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orcamentos as $orcamento)
    <tr>
      <th scope="row">{{$orcamento->id}}</th>
      <td>{{$orcamento->descripcao}}</td>
      <td>Especificacão do cliente para o projeto</td>
      <td>{{$orcamento->cliente}} </td>
      <td>{{$orcamento->data_inicio}}</td>
      <td>{{$orcamento->previsao_entrega}}</td>
      <td>Estado/ Iniciado</td>
      <td>{{$orcamento->custo}}</td>
      <td>Editar / Finalizar</td>
    </tr>
    
@endforeach
  </tbody>
</table>

    

@endsection