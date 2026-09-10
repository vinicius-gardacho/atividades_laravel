<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function create()
    {
        return 'Formulário de criação de aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno armazenado';
    }

    public function show(string $id)
    {
        return "Aluno: $id";
    }

    public function edit(string $id)
    {
        return "Formulário de edição do aluno: $id";
    }

    public function update(Request $request, string $id)
    {
        return "Aluno atualizado: $id";
    }

    public function destroy(string $id)
    {
        return "Aluno removido: $id";
    }
}
