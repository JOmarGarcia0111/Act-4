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
        $gender=Gender::select('id','gender')->get();
        return view ('superheroe.create',compact('gender'));
    }

    public function store(Request $request){
       Superheroe::create([
       'gender_id' => $request->gender_id,
       'real_name' => $request->real_name,
       'universe_id' => 1,
       'name' => 'Spiderman',
       'picture'=>" "

       ]);
       return to_route('superheroe.index');
    }

    public function show(string $id) {
    
        $superheroe = Superheroe::find($id);
        return view('superheroe.show', compact('superheroe'));
        
    }


    public function edit (string $id){
    }

    public function update (Request $request,string $id){
    }

    public function destroy (string $id){
    }
}
