<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://use.fontawesome.com/e322930bf9.js"></script>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        @include('partials.nav')
        <div class="expanded row user-profile">
            @include('partials.nav-profile')
            <div id="app" class="small-12 medium-8 large-9 columns user-info">
                <div class="card">
                    <div class="user-head">
                        <h3>{{ Auth::user()->nombre }}</h3>
                        <p><i class="fa fa-usd"></i> Creditos: <span>{{ decrypt(Auth::user()->creditos) }}</span></p>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @include('partials.footer')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>