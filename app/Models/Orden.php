<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    protected $fillable=['id_cliente','descripcion','id_dispositivo','id_tecnico','fecha'];
}
