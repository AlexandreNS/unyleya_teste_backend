<?php

namespace App\Http\Controllers;

use App\Livros;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LivroController extends Controller
{

    public function showAllLivros()
    {
        return response()->json(Livros::all());
    }

    public function countLivroByOneFilter(Request $request)
    {
        $this->validate($request, [
            'genero_id' => 'integer',
            'editora_id' => 'integer',
            'autor_id' => 'integer'
        ]);

        $count = false;

        if ($request->has('genero_id')) {
            $count = Livros::where('genero_id', $request->input('genero_id') )->count();
        }

        if ($request->has('editora_id')) {
            $count = Livros::where('genero_id', $request->input('genero_id') )->count();
        }

        if ($request->has('autor_id')) {
            $count = Livros::where('genero_id', $request->input('genero_id') )->count();
        }

        return response()->json(['count', $count]);
    }

    public function showOneLivro($id)
    {
        return response()->json(Livros::with('genero','editora','autor')->find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'anoLancamento' => 'nullable|integer',
            'genero_id' => ['nullable', 'exists:generos,id'],
            'editora_id' => ['nullable', 'exists:editoras,id'],
            'autor_id' => ['nullable', 'exists:autores,id']
        ]);

        $livros = Livros::create($request->all());

        return response()->json($livros, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'anoLancamento' => 'nullable|integer',
            'genero_id' => ['nullable', 'exists:generos,id'],
            'editora_id' => ['nullable', 'exists:editoras,id'],
            'autor_id' => ['nullable', 'exists:autores,id']
        ]);
        $livros = Livros::findOrFail($id);
        $livros->update($request->all());
        $livros->genero;
        $livros->autor;
        $livros->editora;

        return response()->json($livros, 200);
    }

    public function delete($id)
    {
        Livros::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}