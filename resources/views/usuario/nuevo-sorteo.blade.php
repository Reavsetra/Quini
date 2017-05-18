@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    
    <div class="quiniela">
        <div class="row">
            <div class="columns">
                <h2>Quiniela N° <span>{{ $sorteo -> id}}</span></h2>
                <h3>Partidos a partir del {{ $sorteo -> fecha_inicio}}</h3>
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
    var id_sorteo = "{{ $sorteo -> id}}";
    var alineacion = "{{ $sorteo -> alineacion}}";
    var equipos = [
        {
            "id":1,
            "equipo":"America",
            "url":"img/equipos/america.jpg"
        },{
            "id":2,
            "equipo":"Cruz Azul",
            "url":"img/equipos/america.jpg"
        },{
            "id":3,
            "equipo":"Chivas",
            "url":"img/equipos/america.jpg"
        },{
            "id":4,
            "equipo":"Monterrey",
            "url":"img/equipos/america.jpg"
        },{
            "id":6,
            "equipo":"Pumas",
            "url":"img/equipos/america.jpg"
        }
    ];
    var splsorteo = alineacion.split(",");
    function getLocal(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = equipos[current].url;
        }
        return equipo;
    };
    function getVisitante(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = equipos[current].url;
        }
        return equipo;
    };
    function str2obj(str, index){
        var obj = {};
        var dash = str.indexOf("-");
        var local = str.slice(0,dash);
        var visitante = str.slice(dash+1,str.length);
        var localData = getLocal(local);
        var visitanteData = getVisitante(visitante);
        obj.id_partido = index+1;
        obj.localName = localData.name;
        obj.localUrl = localData.url;
        obj.visitanteName = visitanteData.name;
        obj.visitanteUrl = visitanteData.url;
        obj.check = [];
        return obj;
    }
    var sorteoFinal = splsorteo.map(str2obj);
</script>