@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h1>Cadastrar aluno</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>

        <label for="curso_id">Curso:</label>
        <select id="curso_id" name="curso_id" required>
            <option value="">Selecione um curso</option>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" @selected(old('curso_id') == $curso->id)>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection
