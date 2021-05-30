<?php

namespace App\Controllers;

use App\Models\Centro;
use App\Views\ListaCentrosVista;
use App\Views\ListaCiudadanosVista;
use Illuminate\Http\Request;

class CentrosController extends Controller {
    function listarTodosCentros(Request $request) {
        $centros = (new Centro())->getTodos();

        return (new ListaCentrosVista($request,$centros))->actualizar();
    }
}
