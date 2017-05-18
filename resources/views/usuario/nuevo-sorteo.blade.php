@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <div class="quiniela">
        <div class="row">
            <div class="columns">
                <h2>Quiniela N° <span>001</span></h2>
                <h3>Partidos a partir del 12 de mayo del 2017</h3>
                <blockquote>
                    Recuerda que tienes como máximo 6 dobles y 3 triples. Participa para ganar la Bolsa de Gol Millonario por 5 pesos más.
                </blockquote>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                {{ csrf_field() }}
                <combinacion>
                </combinacion>
            </div>
        </div>
    </div>
@endsection

<script>
    var id_usuario = "{{ Auth::user()->id_usuario }}";
    console.log(id_usuario);
</script>