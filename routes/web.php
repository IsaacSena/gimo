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
    return view('paginas.usuarioLogin');
});

Route::get('cadastroUsuario', function () {
    return view('paginas.usuarioCadastro');
});

Route::get('homeUsuario', function () {
    return view('paginas.usuarioHome');
});

Route::get('perfilUsuario', function () {
    return view('paginas.usuarioPerfil');
});

Route::get('esqueceuSenhaUsuario', function () {
    return view('paginas.usuarioEsqueceuSenha');
});

Route::get('alterarSenhaUsuario', function () {
    return view('paginas.usuarioAlterarSenha');
});

Route::get('sobrenosUsuario', function () {
    return view('paginas.usuarioSobrenos');
});

Route::get('atividadesUsuario', function () {
    return view('paginas.usuarioAtividades');
});

Route::get('relatorioUsuario', function () {
    return view('paginas.usuarioRelatorio');
});

Route::get('usuarioEditarPerfil', function () {
    return view('paginas.usuarioEditarPerfil');
});

Route::get('usuarioAlfabeto', function () {
    return view('paginas.usuarioAlfabeto');
});

Route::get('usuarioNumeros', function () {
    return view('paginas.usuarioNumeros');
});




//Adm
Route::get('homeAdm', function () {
    return view('paginas.admHome');
});


Route::get('loginAdm', function () {
    return view('paginas.admLogin');
});

Route::get('cadastroAdm', function () {
    return view('paginas.admCadastro');
});

Route::get('sobrenosAdm', function () {
    return view('paginas.admSobrenos');
});

Route::get('esqueceuSenhaAdm', function () {
    return view('paginas.admEsqueceuSenha');
});

Route::get('alterarSenhaAdm', function () {
    return view('paginas.admAlterarSenha');
});

Route::get('perfilAdm', function () {
    return view('paginas.admPerfil');
});

Route::get('admEditarPerfil', function () {
    return view('paginas.admEditarPerfil');
});


//Letras

Route::get('letraA', function () {
    return view('paginas/Letras.letraA');
});