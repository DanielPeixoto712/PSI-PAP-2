<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nissan;

class NissansController extends Controller
{
 public function index(){
   	$nissans = Nissan::all();
   	return view('nissans.index', ['nissans'=>$nissans
   ]);

   }
    public function show (Request $request){
    	$idNissan=$request->id;
    	$nissan=Nissan::where('id_nissan',$idNissan)->first();

	return view('nissans.show',  ['nissan'=>$nissan
]);
}
}