<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $fillable=['productos','precio','stock','prove_id'];

    public function proveedor(){
        return $this->belongsTo(proveedor::class);
    }
    public function compras(){

        return $this->belongsToMany(compra::class);
    }

}
