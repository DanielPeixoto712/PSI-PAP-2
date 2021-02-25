<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
 public function index(){
   	$categorias = Categoria::paginate(10);

   	return view('categorias.index', ['categorias'=>$categorias
   ]);

   }

       public function show (Request $request){
	$idCategoria=$request->id;
	$categoria=Categoria::where('id_categoria', $idCategoria)->with('pecas')->first();

	return view('categorias.show',  ['categoria'=>$categoria
]);
}
}