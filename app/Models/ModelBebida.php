<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBebida extends Model
{
    use HasFactory;

    protected $table = 'bebida';
    public $timestamps = false;

    protected $fillable = [

        'id_bebida',
        'nombre_bebida',
        'fk_id_tipo_bebida',
        'precio_bebida'
    ];

    protected $primaryKey = 'id_bebida';
}
