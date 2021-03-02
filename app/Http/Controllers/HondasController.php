<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Honda;

class HondasController extends Controller
{
 public function index(){
   	$hondas = Honda::all();
   	return view('hondas.index', ['hondas'=>$hondas
   ]);

   }
    public function show (Request $request){
    	$idHonda=$request->id;
    	$honda=Honda::where('id_honda',$idHonda)->first();

	return view('hondas.show',  ['honda'=>$honda
]);
}
}