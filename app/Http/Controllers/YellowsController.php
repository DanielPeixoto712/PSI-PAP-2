<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yellow;

class YellowsController extends Controller
{
 public function index(){
   	$yellows = Yellow::all();
   	return view('yellows.index', ['yellows'=>$yellows
   ]);

   }
    public function show (Request $request){
    	$idYellow=$request->id;
    	$yellow=Yellow::where('id_yellow',$idYellow)->first();

	return view('yellows.show',  ['yellow'=>$yellow 
]);
}
}