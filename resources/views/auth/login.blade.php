@extends('layouts.principal')

@section('content')
    <div class="content row access">
        <div class="columns medium-6 small-12">
            <form class="card" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row align-center">
                    <h3>Login</h3>
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
                        <label>Contraseña
                            <input id="password" type="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">Recordar mis Datos</label>
                    </div>
                    <div class="medium-4 columns">
                        <button type="submit" class="button expanded">Login</button>
                    </div>
                    <div class="medium-12 columns">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection