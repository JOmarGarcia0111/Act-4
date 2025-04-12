<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        return response()->json(Universe::all());
    }

    public function show($id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'Universe not found']);
        }

        return response()->json($universe);
    }
}
