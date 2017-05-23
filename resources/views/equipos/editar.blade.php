@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col m12 s12 ">
                <div class="card-title green">
                Editar Equipo
                </div>
                <div class="card-content white">
                    {!!Form::model($equipo, ['route'=>['equipos.update', $equipo->id], 'method'=>'PUT','files'=>true])!!}
                        <div class="input-field col m6">
                            {!!Form::label('Equipo','Equipo',['for'=>'equipo'])!!}
                            {!!Form::text('equipo',null,['id'=>'equipo'])!!}
                        </div>
                        <div class="file-field input-field col m6">
                            <div class="btn blue darken-3">
                                <span>Logo</span>
                                {!!Form::file('path')!!}
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" >
                            </div>
                        </div>
                        {!!Form::submit('Actualizar',['class'=>'btn blue'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
