<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ap;

class ApsController extends Controller
{
 public function index(){
   	$aps = Ap::all();
   	return view('aps.index', ['aps'=>$aps
   ]);

   }
    public function show (Request $request){
    	$idAp=$request->id;
    	$ap=Ap::where('id_ap',$idAp)->first();

	return view('aps.show',  ['ap'=>$ap 
]);
}
}