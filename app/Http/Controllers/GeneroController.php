<?php

namespace App\Http\Controllers;

use App\Generos;
use Illuminate\Http\Request;

class GeneroController extends Controller
{

    public function showAllGeneros()
    {
        return response()->json(Generos::all());
    }

    public function showOneGenero($id)
    {
        return response()->json(Generos::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $generos = Generos::create($request->all());

        return response()->json($generos, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $generos = Generos::findOrFail($id);
        $generos->update($request->all());

        return response()->json($generos, 200);
    }

    public function delete($id)
    {
        Generos::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}