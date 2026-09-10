<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('users')->where('role', 'user')->update(['role' => 'professor']);

        if (DB::getDriverName() === 'pgsql') {
            DB::statement('alter table "users" drop constraint if exists "users_role_check"');
            DB::statement("alter table \"users\" add constraint \"users_role_check\" check (\"role\" in ('admin', 'professor'))");
        }
    }

    public function down(): void
    {
        DB::table('users')->where('role', 'professor')->update(['role' => 'user']);

        if (DB::getDriverName() === 'pgsql') {
            DB::statement('alter table "users" drop constraint if exists "users_role_check"');
            DB::statement("alter table \"users\" add constraint \"users_role_check\" check (\"role\" in ('admin', 'user'))");
        }
    }
};
