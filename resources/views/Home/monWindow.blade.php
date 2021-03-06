@extends('Layouts.main')
@section('styles')
    {{ Html::style('css/select2.min.css') }}
@endsection
@section('scripts')
    {{ Html::script('js/select2.min.js') }}
    {{ Html::script('js/monWin.js') }}
@endsection
@section('content')
    <div class="container">
        <h2>Mon. Window</h2>
        <div class="row" style="padding: 5px">
            {{-- Panel de información general del modelo cargado. --}}
            <div class="col-lg-4" style="padding: 10px" align = "left">
                <div class="panel panel-info">
                    <div class="panel-heading"><span class="h3">Información general</span></div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <b>Modelo: </b>
                            <select id="selectStruct">
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Panel de visualización del modelo cargado. --}}
            <div class="col-lg-8" style="padding: 10px" align = "left">
                <div class="panel panel-default" style="padding: 5px; height: 400px; width: 100%" id="panelWin">
                    <div id="panelView" class="panel-body" style="background: #868383; color: white; height: 100%; padding: 0px">
                        <table id="noLoadedModelMessage" style="height: 100%; width: 100%">
                            <tbody>
                                <tr>
                                    <td class="text-center"><span class="h3">Ningún modelo cargado.</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection