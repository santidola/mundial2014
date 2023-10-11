<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Grupos extends Controller
{
    public function getGrupos(){
        try {
            DB::connection()->getPdo();
            $grupos = DB::connection()->select("SELECT * FROM Grupos");
            $jsonGrupos = json_encode($grupos);
    
            // Envía el JSON como respuesta
            return response()->json($jsonGrupos);
        } catch (\Exception $e) {
            die("No se pudo conectar a la base de datos: " . $e->getMessage());
        }
    }
}
