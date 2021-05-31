<?php

namespace App\Controllers;

use App\Models\Usuario;
use App\Views\DashboardVista;
use App\Views\LoginVista;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function mostrarVistaLogin(Request $request) {
        if(!request()->user())
            return (new LoginVista($request))->actualizar();
        return redirect()->route('dashboard');
    }

    public function login(Request $request) {
        if(! $request->email){
            return back()->with(['error' => 'El email no puede estar vacio.'])->withInput();
        }
        if(! $request->password) {
            return back()->with(['error' => 'El password no puede estar vacio.'])->withInput();
        }
        $credenciales['email'] = $request->email;
        $credenciales['password'] = $request->password;

        try {
            $usuario = (new Usuario())->buscarPorEmail($credenciales['email']);
        }catch(ModelNotFoundException $e) {
            return back()->with(['error' => 'No existe un usuario con ese email en el sistema.'])->withInput();
        }catch(Exception $e) {
            return back()->with(['error' => 'Hubo un error inesperado al intentar ingresar al sistema'])->withInput();
        }

        if(! Hash::check($credenciales['password'], $usuario->getPassword())) {
            return back()->with(['error' => 'El password para ese usuario no coincide con nuestros registros.'])->withInput($credenciales);
        }

        Auth::login($usuario);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
