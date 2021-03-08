<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Omp extends Model
{
    use HasFactory;
    protected $primaryKey="id_omp";
    protected $table="omp";

   protected $fillable=[
       'volante',
       'preco',
       'observacoes',
       'info'
   ];
    }