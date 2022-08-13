@extends('layouts.main')
@section('title', 'Lista de clientes')
@section('content')

<h1>Lista de clientes </h1>

@foreach($clientes as $cliente)

    <p> {{$cliente -> nome}} </p>

@endforeach

@endsection