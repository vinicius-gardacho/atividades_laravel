<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreignId('curso_id')
                ->nullable()
                ->after('nome')
                ->constrained('cursos')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->dropColumn('curso');
        });
    }

    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('curso')->nullable();
            $table->dropForeign(['curso_id']);
            $table->dropColumn('curso_id');
        });
    }
};
