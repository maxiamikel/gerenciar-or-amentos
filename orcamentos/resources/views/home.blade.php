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
                       <p class="card-date"><span class="titulo-detalhes">Data Or&ccedil;amento:</span> <span class="detalhes">{{$orcamento->data_inicio}}</span></p>
                       <p class="card-text"><span class="titulo-detalhes">Descri&ccedil;&atilde;o:</span> <span class="detalhes"> {{$orcamento->descripcao}}</span></p>
                        <p class="card-text"><span class="titulo-detalhes">Especifica&ccedil;&atilde;o do cliente:</span> <span class="detalhes"> {{$orcamento->especificacao}}</span></p>
                       <p class="card-date"><span class="titulo-detalhes">Previs&atilde;o de entrega:</span> <span class="detalhes"> {{$orcamento->previsao_entrega}}</span></p>
                       <p class="andamento"><span class="titulo-detalhes">Andamento: </span> <span class="detalhes">{{$orcamento->previsao_entrega}} - {{$orcamento->data_inicio}} </span></p>
                        <h5 class="card-title"><span class="titulo-detalhes">Cliente: </span> <a href="/clientes" title="{{$orcamento->cliente}}">{{$orcamento->cliente}} </a></h5>
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