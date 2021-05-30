<?php

namespace App\Controllers;

use App\Models\Ciudadano;
use App\Views\CentrosColaboraCiudadanoVista;
use App\Views\ListaCiudadanosVista;
use Illuminate\Http\Request;

class CiudadanoController extends Controller {
    function listarTodosCiudadanos(Request $request) {
        $ciudadanos = (new Ciudadano())->getTodos();

        return (new ListaCiudadanosVista($request,$ciudadanos))->actualizar();
    }

    function mostrarCentrosDondeColabora(Request $request, $idCiudadano) {
        $ciudadano = (new Ciudadano())->buscarPorId($idCiudadano);
        return (new CentrosColaboraCiudadanoVista($request,$ciudadano))->actualizar();
    }
}
