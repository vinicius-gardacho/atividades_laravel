<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function scopeDoCurso(Builder $query, string $curso): void
    {
        $query->where('curso', $curso);
    }

    public function scopeComNomeContendo(Builder $query, string $palavra): void
    {
        $query->where('nome', 'like', "%{$palavra}%");
    }

    public function scopeCadastradosRecentemente(Builder $query, int $dias = 30): void
    {
        $query->where('created_at', '>=', now()->subDays($dias));
    }

    public static function quantidade(): int
    {
        return static::query()->count();
    }
}
