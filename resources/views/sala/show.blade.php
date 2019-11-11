@extends('layout')

@section('title', 'Listagem das salas')

@section('content')
<br/>
<h1> Detalhes da sala {{$sala->nome}}</h1>
<div class="row">
    <p> <strong>Código</strong> {{$sala->id}}</p>
    <p> <strong>Nome</strong> {{$sala->nome}}</p>
    <p> 
    <strong>Quantidade de alunos</strong> {{$sala->qtdAlunos}}
    </p>
</div>
@endsection