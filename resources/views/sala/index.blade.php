@extends('layout')

@section('title', 'Listagem das salas')

@section('content')
    <h3>Lista das salas - {{count($salas)}}</h3>
    <table class='table'> 
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade de alunos</td>
        </tr>
        @forelse($salas as $s)
            <tr>
                <td>{{$s->id}} </td>
                <td>{{$s->nome}}</td>
                <td>{{$s->qtdAlunos}}</td>
            </tr>
        @empty
        <tr>
            <td class="alert alert-danger" colspan="3">Nenhum registro encontrado</td>
        </tr>        
        @endforelse
        </table> 
@endsection

