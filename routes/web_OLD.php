<?php

use App\Models\Joukkue;
use App\Models\Tehtävä;
use Illuminate\HTTP\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', function () {
    return view('index', [
        'valilehdet' => [
        [
            'id' => 1,
            'nimi' => 'joukkueet'
        ],
        [
            'id' => 2,
            'nimi' => 'tehtävät'
        ],
        [
            'id' => 3,
            'nimi' => 'ajanotto'
        ],
        [
            'id' => 4,
            'nimi' => 'tulokset'
        ],
    ]]);
});

Route::get('/Joukkueet', function() {
    return view('Joukkueet', [
        'joukkueet' => Joukkue::all()
    ]);
});

Route::get('/Joukkueet/lisaa', function() {
    return view('Joukkueet.lisaa', [
    ]);
});

Route::get('/Tehtävät', function() {
    return view('Tehtävät', [
        'tehtävät' => Tehtävä::all()
    ]);
});

Route::get('/Ajanotto', function() {
    return view('Ajanotto');
});

Route::get('delete/{id}', [PostController::class, 'destroy']);

Route::post('store-form', [PostController::class, 'store']);

Route::post('store-time', [AikaController::class, 'store_time']);


