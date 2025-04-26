<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload (Request $request)
    {
        $archivo = $request->file('archivo');
        $path = Storage::put('imagenes',$archivo);
        dd($path);
    }

    public function download(){
        return Storage::download("imagenes/ftAPQSzGG7UADKXmI3sE7zPKyC1iv0tzpHjPSJfk.png");
        
    }
}
