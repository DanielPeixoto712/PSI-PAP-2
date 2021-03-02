<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmw;

class BmwsController extends Controller
{
 public function index(){
   	$bmws = Bmw::all();
   	return view('bmws.index', ['bmws'=>$bmws
   ]);

   }
    public function show (Request $request){
    	$idBmw=$request->id;
    	$bmw=Bmw::where('id_bmw',$idBmw)->first();

	return view('bmws.show',  ['bmw'=>$bmw
]);
}
}