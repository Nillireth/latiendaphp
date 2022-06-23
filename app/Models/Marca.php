<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function productos(){

        // 1 Marca - M productos
        return $this->hasMany(Producto::class);
    }
}
