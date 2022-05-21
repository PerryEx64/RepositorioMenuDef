<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMenu extends Model
{
    use HasFactory;

    protected $table = 'tipo_platillo';
    public $timestamps = false;

    protected $fillable = [

        'id_tipo_platillo',
        'nombre_tipo_platillo',
    ];

    protected $primaryKey = 'id_tipo_platillo';

}
