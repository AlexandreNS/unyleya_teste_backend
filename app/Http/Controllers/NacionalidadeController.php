<?php

namespace App\Http\Controllers;

use App\Nacionalidade;
use Illuminate\Http\Request;

class NacionalidadeController extends Controller
{

    public function showAllNacionalidades()
    {
        return response()->json(Nacionalidade::all());
    }

    public function showOneNacionalidade($id)
    {
        return response()->json(Nacionalidade::find($id));
    }
}