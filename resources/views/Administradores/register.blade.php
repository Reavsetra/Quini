@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="card col m12">
    <div class="card-title grey darken-3 white-text center" style="padding:10px;">
      Crear Nuevo Administrador o editor
    </div>
    <div class="card-content">
      <div class="row">
        {!!Form::open(['route'=>'admin.store', 'method'=>'POST'])!!}
    <div class="input-field col m3">
      <input type="text" name="nombre_admin" value="" id="nombre_admin">
      <label for="us_admin">Nombre</label>
    </div>
    <div class="input-field col m3">
      <input type="email" name="email" value="" id="email">
      <label for="correo_admin">Correo</label>
    </div>
    <div class="input-field col m3">
      <input type="password" name="password" value="" id="password">
      <label for="password">Password</label>
    </div>
    <input type="hidden" name="" value="">
<div class="input-field col m3">
    <select class="" name="id_tipo_admin">
      <option value="" disabled selected>seleccionar una opcion</option>
      <option value="1">Administrador</option>
      <option value="2">Editor</option>
    </select>
  </div>
  <div class="input-field">
    <button type="submit" name="button" class="btn green right">Guardar</button>
  </div>
    {!!Form::close()!!}
    </div>
</div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="card-title grey darken-4 white-text center" style="padding:10px;">
      Administradores Dados de alta
    </div>
    <div class="card-content">
      <table class="striped highlight">
        <thead>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Tipo de Administrador</th>
        </thead>
  @foreach($admins as $admin)
        <tr>
          <td>{{$admin->nombre_admin}}</td>
          <td>{{$admin->email}}</td>
          <td>

            @if ($admin->id_tipo_admin == 1)
                Administrador
            @endif

            @if ($admin->id_tipo_admin == 2)
                Editor
            @endif

          </td>
        </tr>
  @endforeach
      </table>
    </div>
  </div>

</div>
@endsection
