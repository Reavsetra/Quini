@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <div class="quiniela">
        <h2>Quiniela N° <span>001</span></h2>
        <h3>Partidos a partir del 12 de mayo del 2017</h3>
        <blockquote>
            Recuerda que tienes como máximo 6 dobles y 3 triples. Participa para ganar la Bolsa de Gol Millonario por 5 pesos más.
        </blockquote>
        <form class="card" role="form" method="POST" action="{{ route('sorteos.store', auth()->user()->nombre_usuario) }}">
            
            {{ csrf_field() }}
            <div class="alineacion">
                <div class="partido">
                    <div class="equipo">
                        <img src="http://fpoimg.com/60x60?text=Logo" alt="">
                        Equipo Local
                    </div>
                    <div class="equipo">
                        <img src="http://fpoimg.com/60x60?text=Logo" alt="">
                        Equipo Visitante
                    </div>
                    <div class="resultado">
                        <input id="local" name="" type="checkbox" value="local"><label for="local">Gana Local</label>
                        <input id="empate" name="" type="checkbox" value="empate"><label for="empate">Empate</label>
                        <input id="visitante" name="combinacion" type="checkbox" value="combinacion"><label for="visitante">Gana Visitante</label>
                    </div>
                </div>
            </div>
            <div class="enviar">
                <div class="total">
                </div>
            </div>
            <div class="small-4 columns">
                <button type="submit" class="button expanded">Enviar</button>
            </div>            
        </form>
    </div>
@endsection