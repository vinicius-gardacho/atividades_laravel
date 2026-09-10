<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['bail', 'required', 'string', 'min:3', 'max:255'],
            'curso_id' => ['bail', 'required', 'integer', 'exists:cursos,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do aluno é obrigatório.',
            'nome.string' => 'O nome do aluno deve ser um texto.',
            'nome.min' => 'O nome do aluno deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O nome do aluno não pode ter mais de 255 caracteres.',
            'curso_id.required' => 'O curso é obrigatório.',
            'curso_id.integer' => 'O curso selecionado é inválido.',
            'curso_id.exists' => 'O curso selecionado não existe.',
        ];
    }
}
