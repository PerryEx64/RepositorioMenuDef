<?php

namespace App\Http\Livewire;

use App\Models\ModelTipoPlatillo;
use Livewire\Component;


class TipoPlatillo extends Component
{



    public $nombre_tipo_platillo;
    public $id_tipo_platillo;
    public $nombre;

    public function render()
    {
        $tipoPlatillos = ModelTipoPlatillo::all();
        return view('livewire.tipo-platillo', compact('tipoPlatillos'));
    }

    public function store()
    {
        $this->validate(['nombre_tipo_platillo' => 'required']);
        //dd($this->toogle);

        $tipo_platillo = ModelTipoPlatillo::create([
            'id_tipo_platillo' => $this->id_tipo_platillo,
            'nombre_tipo_platillo' => $this->nombre_tipo_platillo,
        ]);

    }
}
