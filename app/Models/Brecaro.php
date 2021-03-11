<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brecaro extends Model
{
    use HasFactory;
    protected $primaryKey="id_brecaro";
    protected $table="brecaro";

   protected $fillable=[
       'backet',
       'preco',
       'observacoes',
       'info'
   ];
    }