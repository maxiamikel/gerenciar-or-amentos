@extends('layouts.main')
@section('title', 'SGO Sistema de Gerenciamento de Orçamentos')
@section('content')

    <div class="home-container" class="col-md-12">
        <h2>Orçamentos</h2>
        <p>Ultimos orçamentos mais antigos</p>
        <div id="cards-container" class="row">
        @foreach($orcamentos as $orcamento)
              <div class="card com-md-3">
                <div class="card-body">
                    <div class="content-body">
                       <p class="card-date">Data Orçamento: {{$orcamento->data_inicio}}</p>
                       <p class="card-date">Previsão de entrega: {{$orcamento->previsao_entrega}}</p>
                       <p class="andamento">Andamento: {{$orcamento->previsao_entrega}} - {{$orcamento->data_inicio}} </p>
                        <h5 class="card-title">Cliente: <a href="/clientes" title="{{$orcamento->cliente}}">{{$orcamento->cliente}} </a></h5>
                        <p class="card-text">{{$orcamento->descripcao}}</p>
                        <p class="custo">Custo: $R {{$orcamento->custo}}</p>
                    </div>
                    <div class="acao">
                        <a href= "#" class="btn btn-primary"> Modificar </a>
                        <a href= "#" class="btn btn-primary"> Finalizar  </a>
                    </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>

@endsection