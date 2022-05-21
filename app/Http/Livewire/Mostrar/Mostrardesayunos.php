<?php

namespace App\Http\Livewire\Mostrar;

use App\Models\ModelPlatillo;
use Livewire\Component;
use Livewire\WithPagination;

class Mostrardesayunos extends Component
{
    use WithPagination;
    public function render()
    {
        $desayunos = ModelPlatillo::where('fk_id_tipo_platillo', '=', '1')->paginate(5);
        return view('livewire.mostrar.mostrardesayunos', compact('desayunos'));
    }
}
