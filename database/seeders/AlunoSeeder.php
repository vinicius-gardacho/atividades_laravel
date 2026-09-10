<?php

namespace Database\Seeders;

use App\Models\Curso;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $alunos = [];
        $cursos = Curso::pluck('id')->all();

        for ($indice = 0; $indice < 10; $indice++) {
            $alunos[] = [
                'nome' => $faker->name(),
                'curso_id' => $faker->randomElement($cursos),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('alunos')->insert($alunos);
    }
}
