<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function mostrarUsuarios(){

        $users = User::all();

        return $users;
    }
}
