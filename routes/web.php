<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    echo 'Hello world!';
    echo '<pre>';
    print(Universe:: all());
    echo '</pre>';

    dump(Universe:: all());

});

Route::get('/gender',[GenderController::class,'index']);

