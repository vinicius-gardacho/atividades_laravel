<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $alunos = [];

        for ($indice = 0; $indice < 10; $indice++) {
            $alunos[] = [
                'nome' => $faker->name(),
                'curso' => $faker->randomElement([
                    'Administração',
                    'Análise e Desenvolvimento de Sistemas',
                    'Engenharia de Software',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('alunos')->insert($alunos);
    }
}
