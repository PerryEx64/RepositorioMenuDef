<?php

namespace App\Http\Livewire\Mostrar;

use App\Models\ModelPlatillo;
use Livewire\Component;
use Livewire\WithPagination;

class Mostrarcenas extends Component
{
    use WithPagination;
    public function render()
    {
        $cenas = ModelPlatillo::where('fk_id_tipo_platillo', '=', '3')->paginate(5);
        return view('livewire.mostrar.mostrarcenas', compact('cenas'));
    }
}
