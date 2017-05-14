@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">

      <div class="card col m12 s12 ">
        <div class="card-title green">
          Crear Equipo
        </div>
        <div class="card-content white">



        {!!Form::open(['route'=>'equipos.store','method'=>'POST','files'=>true])!!}

              <div class="input-field col m6">
                {!!Form::label('Equipo','Equipo',['for'=>'nom_equipo'])!!}
                {!!Form::text('equipo',null,['id'=>'nom_equipo'])!!}
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

          {!!Form::submit('Registrar',['class'=>'btn blue'])!!}
          {!!Form::close()!!}
          </div>




        </div>
  </div>
  </div>

  <div class="container">
    <div class="row">
    @foreach ($equipos as $equipo)

        <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="/img/equipos/{{$equipo->path}}">
            <span class="card-title white col m12 grey-text text-darken-4" style="text-transform:uppercase; " >{{$equipo->equipo}}</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
          </div>

        </div>
        </div>


      @endforeach




</div>
  </div>

@endsection
