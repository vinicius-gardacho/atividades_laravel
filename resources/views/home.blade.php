@extends('layouts.app')

@section('title', 'Página inicial')

@section('content')
    <h1>Bem-vindo</h1>
    <p>Gerencie os alunos da aplicação.</p>

    <a href="{{ route('alunos.index') }}">Ver alunos</a>
@endsection
