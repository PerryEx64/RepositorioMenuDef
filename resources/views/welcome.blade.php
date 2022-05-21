@extends('basic-template')

@section('content')
        <div class="hero min-h-screen" style="background-image: url(https://api.lorem.space/image/burger?w=1000&h=800);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hola Comerciante</h1>
                    <p class="mb-5">Da facilidad a tus clientes para poder ver lo que ofreces en tu menu, crealo y compartelo con ellos.</p>
                    <a href="{{route('visualizar')}}" class="btn btn-primary">Inicia</a>
                </div>
            </div>
        </div>
@endsection
