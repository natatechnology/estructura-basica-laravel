<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index() {

        // $data = DB::connection('adesscloud')->select('SELECT *, s.nombre AS servicio, st.nombre AS status 
        //     FROM registro r 
        //     JOIN servicios s ON s.id = r.ServicioSolicitado 
        //     JOIN status st ON st.id = r.Status AND r.DelegadoId = $usuario_id 
        //     ORDER BY IdRegistro 
        //     DESC LIMIT 0, 10
        // ');

        // dd($data);
        
        return view('dashboard');
    }
}
