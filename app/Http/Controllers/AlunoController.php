<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::latest()->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->validated());

        return redirect()->route('alunos.show', $aluno);
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $aluno->update($request->validated());

        return redirect()->route('alunos.show', $aluno);
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
