@extends('layouts.profile')

@section('title', 'Quiniela')

@section('content')
    <div class="quiniela">
        <div class="row">
            <div class="columns">
                <h2>Quiniela N° <span>{{$combinacion -> id_sorteo}}</span></h2>
                
                <h3>Partidos a partir del {{$combinacion -> fecha_inicio}}</h3>
                <blockquote>
                    Recuerda que tienes como máximo 6 dobles y 3 triples. Participa para ganar la Bolsa de Gol Millonario por 5 pesos más.
                </blockquote>
                <p>{{$combinacion -> combinacion}} </p>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                {{ csrf_field() }}
                <combinacion>
                </combinacion>
            </div>
        </div>
            <p>Id N° <span>{{$combinacion -> id}}</span></p>
    </div>
@endsection


<script>
    var id_usuario = "{{ Auth::user()->id_usuario }}";
    var id_sorteo = "{{ $sorteo -> id}}";
    var alineacion = "{{ $sorteo -> alineacion}}";
    var strEq = "{{ $equipos }}";
    var equipos = JSON.parse(strEq.split("&quot;").join('"'));
    console.log(equipos);
    var splsorteo = alineacion.split(",");
    function getLocal(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = "/img/equipos/"+equipos[current].path;
        }
        return equipo;
    };
    function getVisitante(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = "/img/equipos/"+equipos[current].path;
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