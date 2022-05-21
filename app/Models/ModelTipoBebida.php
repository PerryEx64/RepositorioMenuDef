<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTipoBebida extends Model
{
    use HasFactory;

    protected $table = 'tipo_bebida';
    public $timestamps = false;

    protected $fillable = [

        'id_tipo_bebida',
        'nombre_tipo_bebida',
    ];

    protected $primaryKey = 'id_tipo_bebida';
}
