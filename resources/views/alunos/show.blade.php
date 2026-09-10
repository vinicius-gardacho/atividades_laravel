@extends('layouts.app')

@section('title', 'Aluno')

@section('content')
    <h1>{{ $aluno->nome }}</h1>
    <p>Curso: {{ $aluno->curso }}</p>

    <a href="{{ route('alunos.edit', $aluno) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="POST" action="{{ route('alunos.destroy', $aluno) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
