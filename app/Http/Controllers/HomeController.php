<?php

namespace MT2018\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Http\Response;

class HomeController extends Controller
{
    public function index(){
        return view('Home.index');
    }

    public function contacto(){
        return view('Home.contacto');
    }

    public function monWindow(){
        return view('Home.monWindow');
    }

    public function buscarModelo(Request $request){
        $term = trim($request['q']);
        if (empty($term)) {
            $x = [];
        }
        else{
            $x = [['id' => '1', 'text' => 'Gsdfsf'], ['id' => '2', 'text' => 'Tsdfs']];
        }
        return response()->json($x);
        
    }
}
