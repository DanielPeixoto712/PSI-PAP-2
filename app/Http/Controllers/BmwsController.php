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
public function create(){
    return view('bmws.create');
}
public function store(request $request){
    $novoBmw=$request->validate ([
        'motor'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $bmw=Bmw::create($novoBmw);
    return redirect()->route('bmws.show',[
        'id'=>$bmw->id_bmw]);
}
}