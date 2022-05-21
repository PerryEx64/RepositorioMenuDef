<?php

namespace App\Http\Livewire\Mostrar;

use App\Models\ModelBebida;
use Livewire\Component;
use Livewire\WithPagination;

class Mostrarbebidas extends Component
{
    use WithPagination;

    public function render()
    {
        $bebidas = ModelBebida::join('tipo_bebida', 'tipo_bebida.id_tipo_bebida', '=', 'fk_id_tipo_bebida')->
        select('bebida.nombre_bebida', 'tipo_bebida.nombre_tipo_bebida', 'bebida.precio_bebida')->
        orderBy('tipo_bebida.nombre_tipo_bebida', 'desc')->paginate(5);

        return view('livewire.mostrar.mostrarbebidas', compact('bebidas'));
    }
}
