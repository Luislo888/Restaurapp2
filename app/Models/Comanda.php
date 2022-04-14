<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'camarero_id');
    }

    public function producto()
    {
        return $this->belongsToMany(Producto::class, 'comanda_productos', 'comanda_id', 'producto_id');
    }
}
