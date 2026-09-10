<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Sobre';
});

Route::get('/alunos', function () {
    return 'Alunos';
});

Route::get('/contato', function () {
    return 'Contato';
});
