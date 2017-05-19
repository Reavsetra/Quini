@extends('layouts.principal')

@section('title', 'Cómo Jugar')

@section('content')
    <div class="how-play">
        <div class="row card">
            <div class="columns">
                <h3>¿ Cómo se juega ?</h3>
                <p>Ganar es muy sencillo ya que solo eliges el resultado de 12 partidos y puedes ser uno de los ganadores con tan solo 7 aciertos</p>
                <p>Las formas de juego son:</p>
                <ul>
                    <li><a href=""><i class="fa fa-envelope"></i>Modo Quiniela</a></li>
                    <li><a href=""><i class="fa fa-envelope"></i>Modo Gol del Millón</a></li>
                    <li><a href=""><i class="fa fa-envelope"></i>Modo Dobles y Triples</a></li>
                </ul>
            </div>
        </div>
        <div class="row card">
            <div class="columns">
                <h4>Modo Quiniela</h4>
                <p>Elije a tu favorito para cada partido dentro del sorteo semanal, ya sea Empate, Gana Local, Gana Visitante</p>
                <p>Si tu combinación es correcta para todos y cada uno de los partidos, ganas el premio acomulado.</p>
                <blockquote>
                    Costo de Quiniela $15.00
                </blockquote>
            </div>
            <div class="columns">
                <img src="http://fpoimg.com/450x400?text=Preview" alt="">
            </div>
        </div>
        <div class="row card">
            <div class="columns">
                <img src="http://fpoimg.com/450x400?text=Preview" alt="">
            </div>
            <div class="columns">
                <h4>Gol del Millón</h4>
                <p>En este tipo de juego podrás indicar cuantos goles en total se anotarán.</p>
                <p>Para ganar el gol del millón es necesario acertar en cada uno de los resultados de los partidos.</p>
                <blockquote>
                    Costo de Gol del Millón $5.00 (extra al costo de la Quiniela).
                </blockquote>
            </div>        
        </div>
        <div class="row card">
            <div class="columns">
                <h4>Dobles y Triples</h4>
                <p>Aumenta tus posibilidades eligiendo una segunda y hasta una tercera opción para cada partido con el modo de Dobles y Triples.</p>
                <blockquote>
                    Costo de Gol del Millón $5.00 (extra al costo de la Quiniela).<br>
                    Solo puedes elegir un máximo de 6 dobles y 3 triples por combinación.
                </blockquote>
            </div>
            <div class="columns">
                <img src="http://fpoimg.com/450x400?text=Preview" alt="">
            </div>
        </div>
    </div>
@endsection