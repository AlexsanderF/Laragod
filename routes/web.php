<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VerServico;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [SiteController::class, 'home']);

Route::get('/contato', [SiteController::class, 'contato']);

Route::get('servico/{code?}', VerServico::class);

Route::get('clients', [ClientController::class, 'index']);
Route::get('clients/create', [ClientController::class, 'create']);
Route::post('clients', [ClientController::class, 'store']);

ROute::get('/passagem/dados', function () {
    return view('examples.passagem_dados', [
        'nome' => 'TreinaWeb',
        'descricao' => 'Escola de desenvolvimento'
    ]);
});

Route::get('/exhibition/json', function () {
    return view('examples.exhibition_json')->with([
        'posts' => [
            [
                "titulo" => "Novidades do Laravel",
                "conteudo" => "Nesta versão o laravel..."
            ],
            [
                "titulo" => "Novidades do Blade",
                "conteudo" => "Nesta versão o Blade..."
            ],
        ]]);
});

Route::get('/frameworks/json', function () {
    return view('examples.frameworks_js')->with([

    ]);
});