@extends('layouts.profile')

@section('title', 'Nueva Quiniela')

@section('content')
    <div class="quiniela">
        <h3>Lista de Quinielas Jugadas</h3>
        <table cellspacing="0px">
            <thead>
                <tr>
                    <th>Quiniela N°</th>
                    <th>Comprada</th>
                    <th>Combinación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($combinaciones as $combinacion)
                    <tr>
                        <td>{{$combinacion-> id_sorteo}}</td>
                        <td>{{$combinacion-> created_at}}</td>
                        <td><a href="{{ route('sorteos.show', ['id' => auth()->user()->nombre_usuario, 'sorteo'=>$combinacion-> id]) }}">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection