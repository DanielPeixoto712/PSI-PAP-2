<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ap extends Model
{
    use HasFactory;
    protected $primaryKey="id_ap";
    protected $table="ap";

    protected $fillable=[
       'suspenssao',
       'preco',
       'observacoes',
       'info'
   ];
   
    }
   

