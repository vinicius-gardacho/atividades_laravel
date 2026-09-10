<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::latest()->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);

        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);

        $aluno = Aluno::create([
            ...$request->validated(),
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('alunos.show', $aluno);
    }

    public function show(Aluno $aluno)
    {
        Gate::authorize('view', $aluno);

        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $aluno->update($request->validated());

        return redirect()->route('alunos.show', $aluno);
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
