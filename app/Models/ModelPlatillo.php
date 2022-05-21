<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPlatillo extends Model
{
    use HasFactory;

    protected $table = 'platillo';
    public $timestamps = false;

    protected $fillable = [

        'id_platillo',
        'nombre_platillo',
        'guarnicion_platillo',
        'precio_platillo',
        'fk_id_tipo_platillo',
    ];

    protected $primaryKey = 'id_platillo';

}
