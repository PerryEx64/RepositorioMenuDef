@extends('basic-template')

@section('content')
    <div id="titulo">Menu del Restaurante</div>
    <div class="border-double border-4 border-info rounded-lg flex justify-center">

        <div class="card shadow-2xl sm:mx-1 sm:my-1 grid grid-cols-2 gap-2 xl:grid-cols-2 xl:gap-2">
            @livewire('mostrar.mostrardesayunos')

            @livewire('mostrar.mostraralmuerzos')

            @livewire('mostrar.mostrarcenas')

            @livewire('mostrar.mostrarbebidas')
        </div>
    </div>
@endsection
