<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteComponentController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteInheritanceController;
use App\Http\Controllers\VerServico;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/site/inheritance/', [SiteInheritanceController::class, 'home'])->name('site.inheritance');
Route::get('/site/inheritance/portfolio', [SiteInheritanceController::class, 'portfolio'])->name('site.inheritance.portfolio');
Route::get('/site/inheritance/sobre', [SiteInheritanceController::class, 'about'])->name('site.inheritance.about');
Route::get('/site/inheritance/contato', [SiteInheritanceController::class, 'contact'])->name('site.inheritance.contact');

Route::get('/site/component/', [SiteComponentController::class, 'home'])->name('site.component');
Route::get('/site/component/portfolio', [SiteComponentController::class, 'portfolio'])->name('site.component.portfolio');
Route::get('/site/component/sobre', [SiteComponentController::class, 'about'])->name('site.component.about');
Route::get('/site/component/contato', [SiteComponentController::class, 'contact'])->name('site.component.contact');

Route::get('/', function () {
    return view('welcome', [
        'pagination' => true,
        'projects' => [
            [
                'active' => true,
                'image' => 'cabin.png'
            ],
            [
                'active' => true,
                'image' => 'cake.png'
            ],
            [
                'active' => true,
                'image' => 'circus.png'
            ],
            [
                'active' => false,
                'image' => 'game.png'
            ],
            [
                'active' => true,
                'image' => 'safe.png'
            ],
            [
                'active' => true,
                'image' => 'submarine.png'
            ]
        ]
    ]);
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

Route::get('/comments', function () {
    return view('examples.comments');
});

Route::get('/conditionals', function () {
    return view('examples.conditionals', [
        'comments' => -3,
        'test' => -15
    ]);
});

Route::get('/switch', function () {
    return view('examples.conditionals_switch', [
        'month' => rand(1, 20)
    ]);
});
