<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bomp;

class BompmpsController extends Controller
{
 public function index(){
       $bomp = Bomp::all();
       return view('bomps.index', ['bomps'=>$bomp
   ]);

   }
    public function show (Request $request){
        $idBomp=$request->id;
        $bomp=Bomp::where('id_bomp',$idBomp)->first();

    return view('bomps.show',  ['bomp'=>$bomp
]);
}
public function create(){
    return view('bomps.create');
}
public function store(request $request){
    $novoBomp=$request->validate ([
        'backet'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $bomp=Bomp::create($novoBomp);
    return redirect()->route('bomps.show',[
        'id'=>$bomp->id_bomp]);
}
}