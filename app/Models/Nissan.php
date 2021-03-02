<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nissan extends Model
{
    use HasFactory;
    protected $primaryKey="id_nissan";
    protected $table="nissan";

   protected $fillable=[
       'motor',
       'preco',
       'observacoes',
       'info'
   ];
    }