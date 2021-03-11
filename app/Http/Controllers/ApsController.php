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
public function create(){
    return view('aps.create');
}
public function store(request $request){
    $novoAp=$request->validate ([
        'suspenssao'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $ap=Ap::create($novoAp);
    return redirect()->route('aps.show',[
        'id'=>$ap->id_ap]);
}
}