@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <h1>Alunos</h1>

    <a href="{{ route('alunos.create') }}">Cadastrar aluno</a>

    @if ($alunos->isEmpty())
        <p>Nenhum aluno cadastrado.</p>
    @else
        <ul>
            @foreach ($alunos as $aluno)
                <li>
                    <a href="{{ route('alunos.show', $aluno) }}">{{ $aluno->nome }}</a>
                    - {{ $aluno->curso }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
