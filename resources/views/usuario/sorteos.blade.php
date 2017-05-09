@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <h3>Lista de Quinielas Jugadas</h3>
    <table>
        <thead>
            <tr>
                <th>Quiniela N°</th>
                <th>Fecha de Compra</th>
                <th>Combinación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>004</td>
                <td>12-05-2017</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>
                <td>003</td>
                <td>12-05-2017</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>
                <td>002</td>
                <td>12-05-2017</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>
                <td>001</td>
                <td>12-05-2017</td>
                <td><button>Ver</button></td>
            </tr>
        </tbody>
    </table>
@endsection