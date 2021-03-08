<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sparco;

class SparcosController extends Controller
{
 public function index(){
       $sparco = Sparco::all();
       return view('sparcos.index', ['sparcos'=>$sparco
   ]);

   }
    public function show (Request $request){
        $idSparco=$request->id;
        $sparco=Sparco::where('id_sparco',$idSparco)->first();

    return view('sparcos.show',  ['sparco'=>$sparco
]);
}
public function create(){
    return view('sparcos.create');
}
public function store(request $request){
    $novoSparco=$request->validate ([
        'volante'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $sparco=Sparco::create($novoSparco);
    return redirect()->route('sparcos.show',[
        'id'=>$sparco->id_sparco]);
}
}