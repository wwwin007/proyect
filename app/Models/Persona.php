<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table='personas';
    protected $fillable=['nombre','persona_id','apell_pat','apell_mat','procedencia','fecha_nac'];

    public function compras(){
        return $this->hasMany(compra::class);
    }


}
