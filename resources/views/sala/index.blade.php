@extends('layout')

@section('title', 'Listagem das salas')

@section('content')
<br/>
    <h3>Lista das salas - {{$salas->total()}} no total</h3>
    <p><a href="{{route('salas.criar')}}" target="_blank">Adicionar sala</a></p>
    <table class='table'> 
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Quantidade de alunos</td>
        </tr>
        @forelse($salas as $s)
            <tr>
                <td>
                    <a href="{{route('salas.ver',$s->id)}}" target="_blank"> {{$s->id}}</a>
                </td>
                <td>{{$s->nome}}</td>
                <td>{{$s->qtdAlunos}}</td>
            </tr>
        @empty
        <tr>
            <td class="alert alert-danger" colspan="3">Nenhum registro encontrado</td>
        </tr>        
        @endforelse
        </table> 
        {{$salas->links()}}
@endsection

