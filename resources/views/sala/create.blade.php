@extends('layout')

@section('title', 'Criação de sala')

@section('content')
<br/>
    <div class="row">
        <h1>Adicionar sala</h1>
    </div>
    <hr/>
    <div class="row">
        <form action="/salas" method="POST">
            @csrf

            @if($errors->any())
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>          
                @endforeach
                <br/>
            @endif
            <p>
                <label for="nome"> Nome:</label>
                <input type="text" value="{{old('nome')}}" name="nome">
            </p>
            <p>
                <label for="nome"> Quantidade de alunos:</label>
                <input type="text" value="{{old('qtdAlunos')}}" name="qtdAlunos">
            </p>
            <button type="submit">Criar sala</button>
        </form>
    </div>
@endsection