<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        
        return response()->json(Superheroe::all());
        
    }

    public function show($id)
    {
        $superheroe = Superheroe::find($id);

        if ($superheroe) {
            return response()->json($superheroe);
        } else {
            return response()->json(['error' => 'Superhero not found'], 404);
        }
    }
}