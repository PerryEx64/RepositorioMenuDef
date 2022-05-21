<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use App\Models\ModelTipoBebida;
use Livewire\Component;

class Bebida extends Component
{
    public $nombre_bebida;
    public $fk_id_tipo_bebida;
    public $precio_bebida;

    public function render()
    {
        $tipoBebidas = ModelTipoBebida::all();

        return view('livewire.bebida', compact('tipoBebidas'));
    }

    public function store()
    {
        $this->validate(['nombre_bebida' => 'required']);
        $this->validate(['fk_id_tipo_bebida' => 'required']);
        $this->validate(['precio_bebida' => 'required']);

        $bebida =ModelBebida::create([
            'nombre_bebida' => $this->nombre_bebida,
            'fk_id_tipo_bebida' => $this->fk_id_tipo_bebida,
            'precio_bebida' => $this->precio_bebida,
        ]);

        $this->nombre_bebida = "";
        $this->fk_id_tipo_bebida = "";
        $this->precio_bebida = "";
    }
}
