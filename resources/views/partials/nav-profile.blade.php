
<div class="columns medium-3 user-menu">
    <ul>
        <li><a href="{{ route('profile') }}"><i class="fa fa-user-circle-o"></i> Perfil</a></li>
        <li><a href="{{ route('sorteos.create', auth()->user()->nombre_usuario) }}"><i class="fa fa-futbol-o"></i> Jugar</a></li>
        <li><a href="{{ route('sorteos.index', auth()->user()->nombre_usuario) }}"><i class="fa fa-list-alt"></i> Historial de Juegos</a></li>
        <li><a href=""><i class="fa fa-trophy"></i> Reclamar Premio</a></li>
        <li><a href="{{ route('profile.recarga', auth()->user()->nombre_usuario) }}"><i class="fa fa-credit-card"></i> Comprar Crédito</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Salir</a></li>
    </ul>
</div>