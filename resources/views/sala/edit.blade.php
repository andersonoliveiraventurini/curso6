@extends('layout')

@section('title', 'Editar sala')

@section('content')
<br/>
    <div class="row">
        <h1>Editar detalhes sala {{$sala->nome}}</h1>
    </div>
    <hr/>
    <div class="row">
        <form action="/salas/{{$sala->id}}" method="POST">
            @csrf
            @method('PUT')
            <p>
                <label for="nome"> Nome:</label>
                <input type="text" name="nome" value="{{$sala->nome}}">
            </p>
            <p>
                <label for="nome"> Quantidade de alunos:</label>
                <input type="text" name="qtdAlunos" value="{{$sala->qtdAlunos}}">
            </p>
            <button type="submit">Editar sala</button>
        </form>
    </div>
@endsection