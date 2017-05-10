@extends('layouts.principal')

@section('content')
    <div class="row access">
        <div class="columns medium-6 small-12">
            <br><br>
            <form class="card" role="form" method="POST" action="{{ route('register') }}">
                <h3>Nuevo Usuario</h3>
                {{ csrf_field() }}
                <div class="row align-center">
                    <div class="medium-12 columns">
                        <label>Nombre Completo
                            <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Dirección
                            <input id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" required autofocus>
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Fecha de Nacimiento
                            <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Email
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                             @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Nombre de Usuario
                            <input id="nombre_usuario" type="text" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autofocus>
                             @if ($errors->has('nombre_usuario'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre_usuario') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Contraseña
                            <input id="password" type="password" name="password" value="{{ old('password') }}" required autofocus>
                        </label>
                    </div>
                </div>
                <div class="row align-center">
                    <div class="small-4 columns">
                        <button type="submit" class="button expanded">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection