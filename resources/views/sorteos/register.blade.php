@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">

      <div class="card col m12 s12 ">
        <div class="card-title blue">
          Edicion de Sorteos 
        </div>
        <div class="card-content white">

          
          

          <?php
            for ($i=0; $i <=12 ; $i++) {
          ?> 
          <div class="input-field col s12 m6">
            <select class="icons">
              <option value="" disabled selected>Elije una opción</option>
              @foreach($equipos as $equipo)
                  <option value="" data-icon="/img/equipos/{{ $equipo -> path }}" class="circle">{{ $equipo -> equipo}}</option>
              @endforeach
            </select>
            <label>Equipo Local {{$i}}</label>
          </div>

            <div class="input-field col s12 m6">
            <select class="icons">
              <option value="" disabled selected>Elije una opción</option>
              @foreach($equipos as $equipo)
                  <option value="" data-icon="/img/equipos/{{ $equipo -> path }}" class="circle">{{ $equipo -> equipo}}</option>
              @endforeach
            </select>
            <label>Equipo Visitante {{$i}} </label>
          </div>


             <?php
             }

             ?>


             <button type="button" name="button" class="btn center">Enviar</button>

          </div>


        </div>


  </div>
  </div>

@endsection
