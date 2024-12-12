<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionServicio extends Model
{
    use HasFactory;

    protected $fillable=['precio','id_orden','id_servicio'];
}
