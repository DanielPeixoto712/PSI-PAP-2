<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotoresController extends Controller
{
 public function index(){
   	$motores = Motor::all();
   	return view('motores.index', ['motores'=>$motores
   ]);

   }
    public function show (Request $request){
    	$idMotor=$request->id;
    	$motor=Motor::where('id_motor',$idMotor)->first();

	return view('motores.show',  ['motor'=>$motor
]);
}
}