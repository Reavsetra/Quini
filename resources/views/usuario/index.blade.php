@extends('layouts.principal')

@section('content')
    <div class="row">
        <div class="columns">
            <ul>
                <li>Perfil</li>
                <li>Jugar</li>
                <li>Historial de Juegos</li>
                <li>Solicitar Premio</li>
                
                <li><a href="{{ route('resultados') }}">Login</a></li>
                <li>Salir</li>
            </ul>
        </div>
        <div class="columns">
            Datos de usuario
            
            <ul>
                <li>Nombre: {{ Auth::user()->nombre }}</li>
                <li>Dirección: {{ Auth::user()->direccion }}</li>
                <li>Correo: {{ Auth::user()->email }}</li>
                <li>Usuario: {{ Auth::user()->nombre_usuario }}</li>
            </ul>
        </div>
    </div>
@endsection