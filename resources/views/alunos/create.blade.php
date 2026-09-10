@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h1>Cadastrar aluno</h1>

    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection
