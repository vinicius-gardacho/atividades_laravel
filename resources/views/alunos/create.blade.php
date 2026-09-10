@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h1>Cadastrar aluno</h1>

    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" value="{{ old('curso') }}" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection
