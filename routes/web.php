<?php

use App\Http\Controllers\SuperheroeController;
use App\Models\Superheroe;
use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;

Route::get('/', function () {
    echo 'Hello world!';
    echo '<pre>';
    print(Universe:: all());
    echo '</pre>';

    dump(Universe:: all());

});

Route::resource('gender',GenderController::class);
Route::resource('universe',UniverseController::class);
Route::resource('superheroe',SuperheroeController::class);

