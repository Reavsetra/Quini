@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">

      <div class="card col m12 s12 ">
        <div class="card-title green">
          Ventana genaral Sorteos
        </div>
        <div class="card-content white">
              <div class="input-field col m6">
                <input type="text" name="" value="" id="equipo">
                <label for="equipo">Equipo</label>
              </div>
              <div class="file-field input-field col m6">
                  <div class="btn blue darken-3">
                    <span>Logo</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
              </div>



          </div>


         <button type="button" name="button" class="btn center">Enviar</button>


        </div>
  </div>
  </div>

  <div class="container">
    <div class="row">
<div class="col s12 m3">
<div class="card">
  <div class="card-image">
    <img src="img/6.png">
    <span class="card-title">Cruz Azul</span>
    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
  </div>

</div>
</div>

<div class="col s12 m3">
<div class="card">
  <div class="card-image">
    <img src="img/5.png">
    <span class="card-title">Xolos</span>
    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
  </div>

</div>
</div>


<div class="col s12 m3">
<div class="card">
  <div class="card-image">
    <img src="img/17.png">
    <span class="card-title">Toluca</span>
    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
  </div>
</div>
</div>

<div class="col s12 m3">
<div class="card">
  <div class="card-image">
    <img src="img/7.png">
    <span class="card-title grey darken-4 col m12" style="opacity:0.8;">Chivas Guadalajara</span>
    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">create</i></a>
  </div>
</div>
</div>

</div>
  </div>

@endsection
