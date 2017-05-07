@extends('layouts.profile')

@section('title', 'Datos de Usuario')

@section('content')
    <ul>
        <li>
            <h4>Usuario:</h4>
            <span>{{ Auth::user()->nombre_usuario }}</span>
        </li>
        <li>
            <h4>Fecha de Nacimiento:</h4>
            <span>{{ Auth::user()->fecha_nacimiento }}</span>
        </li>
        <li>
            <h4>Dirección:</h4>
            <span>{{ Auth::user()->direccion }}</span>
        </li>
    </ul>
@endsection