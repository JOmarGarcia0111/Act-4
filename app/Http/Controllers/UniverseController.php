<?php

namespace App\Http\Controllers;
use App\Models\Universe;
use Illuminate\Http\Request;


class UniverseController extends Controller
{
    public function index(){
        $universe = Universe::all();
        return view('universe.index',compact('universe'));
    }

    public function create(){
        return view ('universe.create');
    }

    public function store(Request $request){
        Universe::create([
          'name' => $request->name  
        ]);

        return to_route('universe.index');
    }

    public function show (string $id){
        $universe = Universe::find($id);
        return view('universe.show', compact('universe'));
    }

    public function edit (string $id){
    }

    public function update (Request $request,string $id){
    }

    public function destroy (string $id){
    }
}
