<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Equipos extends Controller
{
    public function getEquipos(){
        try {
            DB::connection()->getPdo();
            $equipos = DB::connection()->select("SELECT Equipos.Nombre AS Equipos, Grupos.Nombre AS Grupo
            FROM Equipos
            INNER JOIN Grupos ON Equipos.Id_grupo = Grupos.Id;");
            $jsonEquipos = json_encode($equipos);
    
            // Envía el JSON como respuesta
            return response()->json($jsonEquipos);
        } catch (\Exception $e) {
            die("No se pudo conectar a la base de datos: " . $e->getMessage());
        }
    }
}
