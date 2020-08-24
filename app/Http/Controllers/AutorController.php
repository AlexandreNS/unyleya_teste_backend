<?php

namespace App\Http\Controllers;

use App\Autores;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AutorController extends Controller
{

    public function showAllAutores()
    {
        return response()->json(Autores::all());
    }

    public function showOneAutor($id)
    {
        return response()->json(Autores::with('nacionalidade')->find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'anoNascimento' => 'nullable|integer',
            'sexo' => ['required', Rule::in(['F', 'M'])],
            'nacionalidade_id' => ['nullable', 'exists:nacionalidade,id']
        ]);

        $autores = Autores::create($request->all());

        return response()->json($autores, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'anoNascimento' => 'nullable|integer',
            'sexo' => Rule::in(['F', 'M']),
            'nacionalidade_id' => ['nullable', 'exists:nacionalidade,id']
        ]);
        $autores = Autores::findOrFail($id);
        $autores->update($request->all());
        $autores->nacionalidade;

        return response()->json($autores, 200);
    }

    public function delete($id)
    {
        Autores::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}