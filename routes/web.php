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

Route::get('perfilUsuario', function () {
    return view('paginas.perfilUsuario');
});

Route::get('esqueceuSenhaUsuario', function () {
    return view('paginas.esqueceuSenhaUsuario');
});

Route::get('alterarSenhaUsuario', function () {
    return view('paginas.alterarSenhaUsuario');
});

Route::get('sobrenosUsuario', function () {
    return view('paginas.sobrenosUsuario');
});

Route::get('atividadesUsuario', function () {
    return view('paginas.atividadesUsuario');
});

Route::get('relatorioUsuario', function () {
    return view('paginas.relatorioUsuario');
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

Route::get('esqueceuSenhaAdm', function () {
    return view('paginas.esqueceuSenhaAdm');
});

Route::get('alterarSenhaAdm', function () {
    return view('paginas.alterarSenhaAdm');
});
