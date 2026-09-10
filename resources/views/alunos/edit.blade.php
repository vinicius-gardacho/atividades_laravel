<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar aluno</title>
</head>
<body>
    <h1>Editar aluno {{ $aluno }}</h1>

    <form method="POST" action="{{ route('alunos.update', $aluno) }}">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('alunos.show', $aluno) }}">Voltar</a>
</body>
</html>
