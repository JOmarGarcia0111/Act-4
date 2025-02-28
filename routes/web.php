<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;

Route::get('/', function () {
    echo 'Hello world!';
    echo '<pre>';
    print(Universe:: all());
    echo '</pre>';

    dump(Universe:: all());

});
