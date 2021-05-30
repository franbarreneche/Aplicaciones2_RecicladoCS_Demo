<?php

namespace App\Controllers;

use App\Models\Centro;
use App\Views\ListaCentrosVista;
use App\Views\RecicladosEnCentroVista;
use Illuminate\Http\Request;

class CentrosController extends Controller {
    function listarTodosCentros(Request $request) {
        $centros = (new Centro())->getTodos();

        return (new ListaCentrosVista($request,$centros))->actualizar();
    }

    function mostrarRecicladosEnCentro(Request $request, $idCentro) {
        $centro = (new Centro())->buscarPorId($idCentro);

        return (new RecicladosEnCentroVista($request,$centro))->actualizar();
    }
}
