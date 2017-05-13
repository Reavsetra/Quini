<!doctype html>
<html lang="{{ config('app.locale') }}" style="">

<style media="screen">
  html{
    background-image:url('/img/ligamx.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

          <!-- Compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

          <!-- Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

          <script type="text/javascript">
          $(document).ready(function(){

            // Initialize collapse button
            $(".button-collapse").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
            //$('.collapsible').collapsible();
               $('select').material_select();
          })
          </script>
          <style media="screen">
           html{
             background-color: grey;
           }
          </style>
    </head>
    <body>
        @include('partials.navAdmin')

        @yield('content')
    </body>
</html>
