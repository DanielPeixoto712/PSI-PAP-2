<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmw;

class BmwsController extends Controller
{
 public function index(){
       $bmw = Bmw::all();
       return view('bmws.index', ['bmws'=>$bmw
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