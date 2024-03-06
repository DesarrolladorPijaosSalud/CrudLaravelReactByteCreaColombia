<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    //
    public function index()
    {
        //Retornamos los usuarios en formato json para que la app de react pueda consumirlos
        return response()->json(Usuarios::all());

    }
}
