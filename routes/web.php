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
        "João Pedro"
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


