<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bomp extends Model
{
    use HasFactory;
    protected $primaryKey="id_bomp";
    protected $table="bomp";

   protected $fillable=[
       'backet',
       'preco',
       'observacoes',
       'info'
   ];
    }