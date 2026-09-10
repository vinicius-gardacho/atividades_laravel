@extends('layouts.app')

@section('title', 'Editar aluno')

@section('content')
    <h1>Editar aluno</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('alunos.update', $aluno) }}">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $aluno->nome) }}" required>

        <label for="curso_id">Curso:</label>
        <select id="curso_id" name="curso_id" required>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" @selected(old('curso_id', $aluno->curso_id) == $curso->id)>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>

        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('alunos.show', $aluno) }}">Voltar</a>
@endsection
