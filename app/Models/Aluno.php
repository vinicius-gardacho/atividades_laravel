<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['nome', 'curso_id', 'user_id'])]
class Aluno extends Model
{
    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeDoCurso(Builder $query, int $cursoId): void
    {
        $query->where('curso_id', $cursoId);
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
