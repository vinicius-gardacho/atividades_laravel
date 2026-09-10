<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aluno</title>
</head>
<body>
    <h1>Aluno {{ $aluno }}</h1>

    <a href="{{ route('alunos.edit', $aluno) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>
</body>
</html>
