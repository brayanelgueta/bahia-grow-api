<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers(){

        $users = User::all();

        return $users;
    }

    public function createUser(Request $request){

        $nuevoUsuario = new User;

        $nuevoUsuario->rut = $request->rut;
        $nuevoUsuario->names = $request->names;
        $nuevoUsuario->last_name = $request->last_name;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->phone = $request->phone;
        $nuevoUsuario->admin = $request->admin;

        $nuevoUsuario->save();

    }

    public function editUser($id){

        $user = User::findOrFail($id);

        return $user;

    }

    public function updateUser(Request $request, $id){

        $actualizarUsuario = User::findOrFail($id);

        $actualizarUsuario->rut = $request->rut;
        $actualizarUsuario->names = $request->names;
        $actualizarUsuario->last_name = $request->last_name;
        $actualizarUsuario->email = $request->email;
        $actualizarUsuario->phone = $request->phone;
        $actualizarUsuario->admin = $request->admin;

        $actualizarUsuario->save();
    }

    public function deleteUser($id){

        $eliminarUsuario = User::findOrFail($id);

        $eliminarUsuario->delete();

        return response('Eliminado', 200);
    }
}
