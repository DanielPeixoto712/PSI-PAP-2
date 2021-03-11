<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brecaro;

class BrecarosController extends Controller
{
 public function index(){
       $brecaro = Brecaro::all();
       return view('brecaros.index', ['brecaros'=>$brecaro
   ]);

   }
    public function show (Request $request){
        $idRecaro=$request->id;
        $brecaro=Brecaro::where('id_brecaro',$idRecaro)->first();

    return view('brecaros.show',  ['brecaro'=>$brecaro
]);
}
public function create(){
    return view('brecaros.create');
}
public function store(request $request){
    $novoBrecaro=$request->validate ([
        'backet'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $brecaro=Brecaro::create($novoBrecaro);
    return redirect()->route('brecaros.show',[
        'id'=>$brecaro->id_brecaro]);
}
}