<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    {{-- Bootstrap --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{-- Styles. --}}
    {{ Html::style('css/main.css') }}
    @yield('styles')

    {{-- Js Scripts --}}
    @yield('scripts')
    <title>Mon Tool</title>
</head>
<body>
    <div id="wrapper">
        {{-- Cabecera --}}
        <div class="container-fluid navbar-fixed-top" id="cabecera">
            <div class="row">
                <div class="col-md-1">
                    {{ Html::image('imag/signal1.jpg', '...', ['height' => '80', 'width' => '100']) }}
                </div>
                <div class="col-md-4">
                    <h2>Moon Tool 2018</h2>
                    <h4>Mon Tool - Versión 1.</h4>
                </div>
                <dvi class="col-md-7" style="position: absolute; bottom: 10px; right: 0;" align = "right">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='{{ action("HomeController@index") }}'">Inicio</button>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='#'">Registro</button>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='#'">Iniciar sesión</button>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='{{ action("HomeController@contacto") }}'">Contacto</button>
                </dvi>
            </div>
        </div>
        {{-- Contenido --}}
        <div id="contenido" align = "center">
            @yield('content')
        </div>
        {{-- Pie de página --}}
        <div id="pie">
            <div class="container-fluid text-muted">
                <div class="col-md-3">
                    <span>
                        &copy; 2018 Mon Tool<br>
                        Mon Tool - Versión 1.<br>
                        <a href="#">Aviso de privacidad</a><br>
                        Última actualización: 09 de Marzo de 2018.
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>