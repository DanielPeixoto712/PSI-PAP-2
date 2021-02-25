<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    use HasFactory;
    protected $primaryKey="id_fabricante";
    protected $table="fabricantes";

    public function motores(){
    	return $this->hasMany('App\Models\Motor', 'id_fabricante');
    }

  
}
