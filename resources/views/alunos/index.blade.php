@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <h1>Alunos</h1>

    <a href="{{ route('alunos.create') }}">Cadastrar aluno</a>

    <p>Nenhum aluno cadastrado.</p>
@endsection
