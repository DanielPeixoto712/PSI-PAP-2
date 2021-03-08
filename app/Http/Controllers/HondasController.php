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
public function create(){
    return view('hondas.create');
}
public function store(request $request){
    $novoHonda=$request->validate ([
        'motor'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $honda=Honda::create($novoHonda);
    return redirect()->route('hondas.show',[
        'id'=>$honda->id_honda]);
}
}