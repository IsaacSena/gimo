<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', function () {
    return view('paginas.home');
});

Route::get('sobrenos', function () {
    return view('paginas.sobrenos');
});






//Usuario
Route::get('loginUsuario', function () {
    return view('paginas.loginUsuario');
});

Route::get('cadastroUsuario', function () {
    return view('paginas.cadastroUsuario');
});

Route::get('homeUsuario', function () {
    return view('paginas.homeUsuario');
});








//Adm
Route::get('homeAdm', function () {
    return view('paginas.homeAdm');
});


Route::get('loginAdm', function () {
    return view('paginas.loginAdm');
});

Route::get('cadastroAdm', function () {
    return view('paginas.cadastroAdm');
});

Route::get('sobrenosAdm', function () {
    return view('paginas.sobrenosAdm');
});
