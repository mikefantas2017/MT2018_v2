@extends('Layouts.main')
@section('scripts')
    {{ Html::script('js/main.js') }}
@endsection
@section('content')
    <div class="container-fluid">
        <h1>Sistema Mon Tool</h1>
        <h2>Herramienta de prueba v1 (2018)</h2>
        <div class="row" style="padding: 30px">
            {{-- Opción 1 --}}
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading"><span class="h3">Título 1</span></div>
                    <div class="panel-body">
                        Descripción.
                    </div>
                </div>
            </div>
            {{-- Mon. Window --}}
            <div class="col-md-4">
                <div class="panel panel-info" onclick="window.location.href='{{ action("HomeController@monWindow") }}'">
                    <div class="panel-heading"><span class="h3">Mon. Window</span></div>
                    <div class="panel-body">
                        Descripción.
                    </div>
                </div>
            </div>
            {{-- Opción 3 --}}
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading"><span class="h3">Título 3</span></div>
                    <div class="panel-body">
                        Descripción.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection