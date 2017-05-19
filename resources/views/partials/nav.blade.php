<nav class="principal">
    <ul class="primary">
        <li><a href="{{ route('como') }}">¿Cómo puedo Participar?</a></li>
        <li><a href="{{ route('register') }}">Quiero Jugar</a></li>
        <li><a href="{{ route('resultados') }}">Resultados</a></li>
    </ul>
    <ul class="secondary">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
        @else
            <li class="dropdown">
                <a href="{{ route('profile') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->nombre_usuario }}<span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</nav>