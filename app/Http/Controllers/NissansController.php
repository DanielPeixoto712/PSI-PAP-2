<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nissan;

class NissansController extends Controller
{
 public function index(){
       $nissan = Nissan::all();
       return view('nissans.index', ['nissans'=>$nissan
   ]);

   }
    public function show (Request $request){
        $idNissan=$request->id;
        $nissan=Nissan::where('id_nissan',$idNissan)->first();

    return view('nissans.show',  ['nissan'=>$nissan
]);
}
public function create(){
    return view('nissans.create');
}
public function store(request $request){
    $novoNissan=$request->validate ([
        'motor'=>['required','min:2','max:100'],
        'preco'=>['nullable','min:2'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],

]);
    $nissan=Nissan::create($novoNissan);
    return redirect()->route('nissans.show',[
        'id'=>$nissan->id_nissan]);
}
}