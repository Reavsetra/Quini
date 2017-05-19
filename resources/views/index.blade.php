@extends('layouts.principal')

@section('title', 'Bienvenidos')

@section('content')

    <div class="content row align-middle">
        <div class="column">
            @component('components.metrics')
                @slot('restantes')
                    <span>$1,000.00</span>
                    <p>Tiempo restante para el cierre</p>
                @endslot
                @slot('bolsa')
                    <span>$1,000.00</span>
                    <p>Bolsa Acumulada</p>
                @endslot
                @slot('usuarios')
                    <span>200</span>
                    <p>Usuarios</p>
                @endslot
                @slot('semana')
                    <span>230</span>
                    <p>Quinielas</p>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection