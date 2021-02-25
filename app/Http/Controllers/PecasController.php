<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;
use App\Models\Categoria;

class PecasController extends Controller
{
 public function index(){
   	$pecas = Peca::paginate(10);

   	return view('pecas.index', ['pecas'=>$pecas
   ]);

   }

    public function show (Request $request){
	$idPeca=$request->id;
	$peca=Peca::where('id_peca', $idPeca)->with('categorias')->first();

	return view('pecas.show',  ['peca'=>$peca
]);
}
}