<?php

use App\Models\Aika;
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
            'nimi' => 'Joukkueet'
        ],
        [
            'id' => 2,
            'nimi' => 'Tehtävät'
        ],
        [
            'id' => 3,
            'nimi' => 'Ajanotto'
        ],
        [
            'id' => 4,
            'nimi' => 'Tulokset'
        ],
    ]]);
});
Route::get('/Joukkueet', function() {
    return view('Joukkueet', [
        'joukkueet' => Joukkue::all(),
        'heading' => 'Not Working'
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
    return view('Ajanotto', [
        'heading' => 'Not Working'
    ]);
});

Route::get('delete/{id}', [PostController::class, 'destroy']);

Route::post('store-form', [PostController::class, 'store']);

Route::post('store-time', [AikaController::class, 'store_time']);


