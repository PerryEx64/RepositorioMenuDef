<div wire:ignore class="border-dashed border-2 border-info flex justify-center rounded-full">
    <label  for="modal-tipo-platillo" class="btn btn-outline btn-info mx-2 my-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
        </svg>
        Agregar Tipo Platillo</label>

    @livewire('tipo-platillo')

    <label for="modal-tipo-bebida" class="btn btn-outline btn-info mx-2 my-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
        </svg>
        Agregar Tipo Bebida</label>

    @livewire('tipo-bebida')
</div>

<div  class="grid grid-cols-2 mt-2">
    <!--Platillos-->
    @livewire('platillo')

    <!--BEBIDAS-->
    @livewire('bebida')
</div>


