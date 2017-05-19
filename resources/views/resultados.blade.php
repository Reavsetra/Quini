@extends('layouts.principal')

@section('title', 'Resultados')

@section('content')
    <div class="content row align-middle">
        <div class="column">
            <div class="card quiniela">
                <h3>Sorteos Anteriores</h3>
                <table cellspacing="0px">
                    <thead>
                        <tr>
                            <th>Quiniela N°</th>
                            <th>Fecha de Inicio</th>
                            <th>Combinación</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td><a href="#">Ver</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection