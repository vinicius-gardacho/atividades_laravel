@extends('layouts.app')

@section('title', 'Aluno')

@section('content')
    <h1>Aluno {{ $aluno }}</h1>

    <a href="{{ route('alunos.edit', $aluno) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection
