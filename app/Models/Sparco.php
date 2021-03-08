<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparco extends Model
{
    use HasFactory;
    protected $primaryKey="id_sparco";
    protected $table="sparco";

   protected $fillable=[
       'volante',
       'preco',
       'observacoes',
       'info'
   ];
    }