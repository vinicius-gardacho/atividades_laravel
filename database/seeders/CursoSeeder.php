<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            'Administração',
            'Análise e Desenvolvimento de Sistemas',
            'Engenharia de Software',
        ] as $nome) {
            Curso::create(['nome' => $nome]);
        }
    }
}
