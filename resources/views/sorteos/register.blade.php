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
for ($i=0; $i <=16 ; $i++) {
 ?>

               <div class="input-field col s12 m6">
               <select class="icons">
                 <option value="" disabled selected>Choose your option</option>
                 <option value="" data-icon="/img/6.png" class="circle">Cruz Azul</option>
                 <option value="" data-icon="/img/5.png" class="circle">Xolos</option>
                 <option value="" data-icon="/img/17.png" class="circle">Toluca</option>
               </select>
               <label>Equipo Local {{$i}}</label>
             </div>

             <div class="input-field col s12 m6">
              <select class="icons">
                <option value="" disabled selected>Choose your option</option>
                <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
                <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
                <option value="" data-icon="images/yuna.jpg" class="circle">example 3</option>
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
