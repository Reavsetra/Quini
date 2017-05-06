@extends('layouts.principal')

@section('content')
    <form role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Nombre Completo</label>
            </div>
            <div class="small-4 columns">
                <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" required autofocus>
            </div>
            @if ($errors->has('nombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Dirección</label>
            </div>
            <div class="small-4 columns">
                <input id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Fecha de Nacimiento</label>
            </div>
            <div class="small-4 columns">
                <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Email</label>
            </div>
            <div class="small-4 columns">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Nombre de Usuario</label>
            </div>
            <div class="small-4 columns">
                <input id="nombre_usuario" type="text" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Contraseña</label>
            </div>
            <div class="small-4 columns">
                <input id="password" type="password" name="password" value="{{ old('password') }}" required autofocus>
            </div>
        </div>
        <div class="row align-center">
            <div class="small-4 columns">
                <button type="submit" class="button expanded">Enviar</button>
            </div>
        </div>
    </form>
@endsection

@section ('anterior')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Usuario</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection