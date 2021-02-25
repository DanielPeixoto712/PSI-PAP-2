<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricante;

class Fabricantes Controller extends Controller
{
 public function index(){
   	$abricantes = Fabricante::all());

   	return view('fabricantes.index', ['fabricantes'=>$fabricantes
   		
   ]);

   }

       public function show (Request $request){
	$idFabricante=$request->id;
	$fabricante=Fabricante::where('id_fabricante', $idFabricante)->with('motores')->first();

	return view('fabricantes.show',  ['fabricante'=>$fabricante
]);
}
}