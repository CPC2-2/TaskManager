<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasques extends Model
{
    protected $fillable = [
        'proyecto_id',
        'nom',
        'descripcio',
        'estat',
        'data_expiracio',
    ];

    //relationship with table proyect
    public function Proyecto(){

        return $this->belongsTo(Proyecto::class);

    }
}
