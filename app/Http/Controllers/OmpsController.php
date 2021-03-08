<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Omp;

class OmpsController extends Controller
{
 public function index(){
       $omp = Omp::all();
       return view('omps.index', ['omps'=>$omp
   ]);

   }
    public function show (Request $request){
        $idOmp=$request->id;
        $omp=Omp::where('id_omp',$idOmp)->first();

    return view('omps.show',  ['omp'=>$omp
]);
}
public function create(){
    return view('omps.create');
}
public function store(request $request){
    $novoOmp=$request->validate ([
        'volante'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $omp=Omp::create($novoOmp);
    return redirect()->route('omps.show',[
        'id'=>$omp->id_omp]);
}
}