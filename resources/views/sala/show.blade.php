@extends('layout')

@section('title', 'Listagem das salas')

@section('content')
<br/>
<h1> Detalhes da sala {{$sala->nome}}</h1>
<p><a href="/salas/{{$sala->id}}/edit" target="_blank">Editar sala</a></p>
<form action="/salas/{{$sala->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger"> Deletar sala</button>
</form>
<div class="row">
    <p> <strong>Código</strong> {{$sala->id}}</p>
    <p> <strong>Nome</strong> {{$sala->nome}}</p>
    <p> 
    <strong>Quantidade de alunos</strong> {{$sala->qtdAlunos}}
    </p>
</div>
@endsection