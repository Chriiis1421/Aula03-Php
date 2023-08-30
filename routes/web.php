<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/alunos', function() {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro",
        "Christian Oliveira",
        "Arthur Utida",
        "Felipe Jianni"
    );

    $total = count($dados);

    $alunos = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $nome) {
            $cont++;  
            $alunos .= "<li>$cont - $nome</li>";
            $cont--;  
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $alunos = $alunos."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $alunos .= "</ul>";

    return $alunos;
});

Route::get('/alunos/limite/{total}', function($total) {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro",
        "Christian Oliveira",
        "Arthur Utida",
        "Felipe Jianni"
    );

    $alunos = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $nome) {
            $cont++;  
            $alunos .= "<li>$cont - $nome</li>";
            $cont--;
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $alunos = $alunos."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $alunos .= "</ul>";

    return $alunos;
});

Route::get('/alunos/matricula/{numero}', function($numero) {

    $dados = array(
        1 => "Carlos Eduardo",
        2 => "Maria Cláudia",
        3 => "João Pedro",
        4 => "Christian Oliveira",
        5 => "Arthur Utida",
        6 => "Felipe Jianni"
    );

    if(count($dados) >= $numero) {
        return "<li>$numero - $dados[$numero]</li>";
    }

    return "Não encontrado!!";
});

Route::get('/alunos/nome/{nome}', function($nome) {

    $dados = array(
        1 => "Carlos Eduardo",
        2 => "Maria Cláudia",
        3 => "João Pedro",
        4 => "Christian Oliveira",
        5 => "Arthur Utida",
        6 => "Felipe Jianni"
    );

    if(count($dados) >= $nome) {
        return "<li>$numero - $dados[$nome]</li>";
    }

    return "Não encontrado!!";
});
