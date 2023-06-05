<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    
    protected $table='compras';
    protected $fillable=['fecha_compra','persona_id'];
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
    public function productos(){
        return $this->belongsToMany(producto::class);
    }
}
