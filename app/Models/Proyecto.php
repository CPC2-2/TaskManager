<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = 
    ['nombre', 
    'descripcion', 
    'fecha_inicio', 
    'fecha_fin', 
    'activo'];

    //relationship with task tables
    public function Tasques(){

        return $this->hasMany(Tasques::class);
        
    }
}
