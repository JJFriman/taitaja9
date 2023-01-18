<?php

use App\Models\Joukkue;
use App\Models\Tehtävä;
use Illuminate\HTTP\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AikaController;
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
    return view('welcome', [
        'heading' => 'Taitajat9',
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

Route::get('/joukkueet', function() {
    return view('joukkueet', [
        'joukkueet' => Joukkue::all()
    ]);
});

Route::get('/joukkueet/lisaa', function() {
    return view('joukkueet.lisaa', [
    ]);
});

Route::get('/tehtävät', function() {
    return view('tehtävät', [
        'tehtävät' => Tehtävä::all()
    ]);
});

Route::get('/ajanotto', function() {
    return view('ajanotto', [
        'tehtävät' => Tehtävä::all(),
        'joukkueet' => Joukkue::all()
    ]);
});

Route::post('store-time', [AikaController::class, 'store_time']);