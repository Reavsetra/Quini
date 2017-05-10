@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <div class="quiniela">
        <h2>Quiniela N° <span>001</span></h2>
        <h3>Partidos a partir del 12 de mayo del 2017</h3>
        <blockquote>
            Recuerda que tienes como máximo 6 dobles y 3 triples. Participa para ganar la Bolsa de Gol Millonario por 5 pesos más.
        </blockquote>
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
                    <input id="checkbox1" type="checkbox"><label for="checkbox1">Gana Local</label>
                    <input id="checkbox2" type="checkbox"><label for="checkbox2">Empate</label>
                    <input id="checkbox3" type="checkbox"><label for="checkbox3">Gana Visitante</label>
                </div>
            </div>
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
                    <input id="checkbox4" type="checkbox"><label for="checkbox4">Gana Local</label>
                    <input id="checkbox5" type="checkbox"><label for="checkbox5">Empate</label>
                    <input id="checkbox6" type="checkbox"><label for="checkbox6">Gana Visitante</label>
                </div>
            </div>
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
                    <input id="checkboxa1" type="checkbox"><label for="checkboxa1">Gana Local</label>
                    <input id="checkboxa2" type="checkbox"><label for="checkboxa2">Empate</label>
                    <input id="checkboxa3" type="checkbox"><label for="checkboxa3">Gana Visitante</label>
                </div>
            </div>
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
                    <input id="checkboxa4" type="checkbox"><label for="checkboxa4">Gana Local</label>
                    <input id="checkboxa5" type="checkbox"><label for="checkboxa5">Empate</label>
                    <input id="checkboxa6" type="checkbox"><label for="checkboxa6">Gana Visitante</label>
                </div>
            </div>
        </div>
        <div class="enviar">
            <div class="total">
            </div>
        </div>
    </div>
@endsection