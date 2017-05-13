@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <div class="quiniela">
        <h3>Lista de Quinielas Jugadas</h3>
        <table cellspacing="0px">
            <thead>
                <tr>
                    <th>Quiniela N°</th>
                    <th>Fecha Inicio</th>
                    <th>Combinación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>004</td>
                    <td>12-05-2017</td>
                    <td><a>Ver</a></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>12-05-2017</td>
                    <td><a>Ver</button></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>12-05-2017</td>
                    <td><a>Ver</a></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>12-05-2017</td>
                    <td><a>Ver</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection