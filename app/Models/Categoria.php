<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //Extender modelo para relacionarlo con Porductos

    public function productos(){

        // 1 cateogira - M productos
        return $this->hasMany(Producto::class);
    }
}
