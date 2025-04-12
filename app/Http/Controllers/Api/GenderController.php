<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        return response()->json(Gender::all());
    }

    public function show($id)
    {
        $gender = Gender::find($id);

        if (!$gender) {
            return response()->json(['message' => 'Gender not found']);
        }

        return response()->json($gender);
    }
}
