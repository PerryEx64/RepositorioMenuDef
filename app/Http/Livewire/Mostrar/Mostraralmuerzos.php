<?php

namespace App\Http\Livewire\Mostrar;

use App\Models\ModelPlatillo;
use Livewire\Component;
use Livewire\WithPagination;

class Mostraralmuerzos extends Component
{
    use WithPagination;

    public function render()
    {
        $almuerzos = ModelPlatillo::where('fk_id_tipo_platillo', '=', '2')->paginate(5);

        return view('livewire.mostrar.mostraralmuerzos', compact('almuerzos'));
    }
}
