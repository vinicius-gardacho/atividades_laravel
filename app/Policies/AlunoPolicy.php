<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function before(User $user): ?bool
    {
        return $user->isAdmin() ? true : null;
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return $user->id === $aluno->user_id;
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return $user->id === $aluno->user_id;
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->id === $aluno->user_id;
    }
}
