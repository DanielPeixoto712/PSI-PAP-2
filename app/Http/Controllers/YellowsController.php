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
public function create(){
    return view('yellows.create');
}
public function store(request $request){
    $novoYellow=$request->validate ([
        'suspensao'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $yellow=Yellow::create($novoYellow);
    return redirect()->route('yellows.show',[
        'id'=>$yellow->id_yellow]);
}
}