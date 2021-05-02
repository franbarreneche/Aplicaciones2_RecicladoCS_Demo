<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function login(Request $request) {
        if(! $request->email){
            return back()->withErrors(['Email' => 'El email no puede estar vacio.'])->withInput();
        }
        if(! $request->password) {
            return back()->withErrors(['Password' => 'El password no puede estar vacio.'])->withInput();
        }

        $credenciales = [
            "email" => $request->email,
            "password" => $request->password
        ];

        try {
            $usuario = User::where('email',$credenciales['email'])->firstOrFail();
        }catch(ModelNotFoundException $e) {
            return back()->withErrors('No existe un usuario con ese email en el sistema.')->withInput();
        }catch(Exception $e) {
            return back()->withErrors('Hubo un error al intentar ingresar al sistema')->withInput();
        }

        if(! Hash::check($credenciales['password'], $usuario->password)) {
            return back()->withInput($credenciales)->withErrors('El password para ese usuario no coincide con nuestros registros.');
        }
        //si llegamos hasta acá quiere decir que el usuario existe en la bd y que el password coincide
        Auth::login($usuario);

        return view('dashboard');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
