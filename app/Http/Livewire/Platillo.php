<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use App\Models\ModelMenu;
use App\Models\ModelPlatillo;
use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class Platillo extends Component
{
    public $nombre_platillo;
    public $fk_id_tipo_platillo;
    public $guarnicion_platillo;
    public $precio_platillo;

    public function render()
    {
        $tipoPlatillos =ModelTipoPlatillo::all();

        return view('livewire.platillo', compact('tipoPlatillos'));
    }

    public function store()
    {

        $platillo =ModelPlatillo::create([
            'nombre_platillo' => $this->nombre_platillo,
            'guarnicion_platillo' => $this->guarnicion_platillo,
            'precio_platillo' => $this->precio_platillo,
            'fk_id_tipo_platillo' => $this->fk_id_tipo_platillo,
        ]);

        $this->fk_id_tipo_platillo = "";
        $this->nombre_platillo = "";
        $this->guarnicion_platillo = "";
        $this->precio_platillo = "";
    }
}
