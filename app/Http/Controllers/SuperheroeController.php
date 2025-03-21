<?php

namespace App\Http\Controllers;
use App\Models\Universe;
use App\Models\Superheroe;
use App\Models\Gender;
use Illuminate\Http\Request;


class SuperheroeController extends Controller
{
    public function index(){
        $superheroe = Superheroe::all();
        return view('superheroe.index', compact('superheroe'));   
    }

    public function create(){
        $generes = Gender::all();  
        $universes = Universe::all(); 

    return view('superheroe.create', compact('generes', 'universes'));
    }

    public function store(Request $request){
       Superheroe::create([
       'gender_id' => $request->gender_id,
       'real_name' => $request->real_name,
       'universe_id' => $request->universe_id,
       'name' => $request->name,
       'picture'=>$request->picture

       ]);
       return to_route('superheroe.index');
    }

    public function show(string $id) {
    
        $superheroe = Superheroe::find($id);
        $generes = Gender::all();  
        $universes = Universe::all(); 

        return view ('superheroe.show',compact('superheroe','generes','universes'));
        
    }


    public function edit (string $id){
        $superheroe = Superheroe::find($id);
        $generes = Gender::all();  
        $universes = Universe::all(); 

        return view ('superheroe.edit',compact('superheroe','generes','universes'));
    }

    public function update (Request $request,string $id){
        $superheroe = Superheroe::find($id);
        $superheroe -> update([
            'gender_id' => $request->gender_id,
            'real_name' => $request->real_name,
            'universe_id' => $request->universe_id,
            'name' => $request->name,
            'picture'=>$request->picture

        ]);
        return to_route('superheroe.show', $superheroe->id);
    }

    public function destroy (Superheroe $superheroe){
        $superheroe->delete();
        return redirect()->route('superheroe.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
}
