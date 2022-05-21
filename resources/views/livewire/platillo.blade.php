<div  class="mockup-window border border-base-300">
    <div  class="grid flex justify-center px-4 py-5 bg-base-200">
        <div class="badge badge-neutral text-xl px-4 py-4 italic">Platillos</div>
        <form  wire:submit.prevent="store">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Nombre del Platillo</span>
                    <span class="label-text-alt">Ej. Puyazo Importado</span>
                </label>
                <input wire:model="nombre_platillo" type="text" placeholder="Escribe Aqui" class="input input-bordered w-full max-w-xs">
            </div>

            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Elige tipo de Platillo</span>
                    <span class="label-text-alt">Ej. Cena</span>
                </label>
                <select wire:model="fk_id_tipo_platillo" class="select select-bordered">
                    <option selected>Elige</option>
                    @foreach($tipoPlatillos as $tipoPlatillo)
                        <option value="{{$tipoPlatillo->id_tipo_platillo}}" >{{$tipoPlatillo->nombre_tipo_platillo}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Guarniciones</span>
                    <span class="label-text-alt">Ej. Frijol, Cebollin, Papas, etc</span>
                </label>
                <textarea wire:model="guarnicion_platillo" class="textarea textarea-bordered h-24" placeholder="Escribe Aqui"></textarea>
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Ingreso Precio</span>
                </label>
                <label class="input-group">
                    <span>Precio</span>
                    <input wire:model="precio_platillo" type="number" placeholder="10" class="input input-bordered">
                    <span>Q.</span>
                </label>
            </div>
            <input type="submit" value="Guardar" class="btn btn-ghost mt-4">
        </form>
    </div>
</div>
