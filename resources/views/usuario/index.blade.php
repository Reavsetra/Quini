@extends('layouts.principal')

@section('content')
    <div class="expanded row user-profile">
        <div class="columns medium-3 user-menu">
            <ul>
                <li><a href="{{ route('profile') }}"><i class="fa fa-user-circle-o"></i> Perfil</a></li>
                <li><a href=""><i class="fa fa-futbol-o"></i> Jugar</a></li>
                <li><a href=""><i class="fa fa-list-alt"></i> Historial de Juegos</a></li>
                <li><a href=""><i class="fa fa-trophy"></i> Reclamar Premio</a></li>
                <li><a href=""><i class="fa fa-credit-card"></i> Comprar Crédito</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Salir</a></li>
            </ul>
        </div>
        <div class="columns user-info">
            <div class="card">
                <div class="user-head">
                    <h3>{{ Auth::user()->nombre }}</h3>
                    <p><i class="fa fa-usd"></i> Creditos: <span>100</span></p>
                </div>
                <ul>
                    <li>Dirección: {{ Auth::user()->direccion }}</li>
                    <li>Correo: {{ Auth::user()->email }}</li>
                    <li>Usuario: {{ Auth::user()->nombre_usuario }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection