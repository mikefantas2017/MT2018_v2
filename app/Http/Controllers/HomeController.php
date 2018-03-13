<?php

namespace MT2018\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
            $term = " ";
        }
        $structs = DB::table('estructura')
                            ->select('id', 'nombre as text')
                            ->where('nombre', 'like', '%'.$term.'%')
                            ->limit(10)
                            ->orderBy('nombre')
                            ->get();
        return response()->json($structs);
        
    }
}
