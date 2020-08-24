<?php

namespace App\Http\Controllers;

use App\Editoras;
use Illuminate\Http\Request;

class EditoraController extends Controller
{

    public function showAllEditoras()
    {
        return response()->json(Editoras::all());
    }

    public function showOneEditora($id)
    {
        return response()->json(Editoras::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $editoras = Editoras::create($request->all());

        return response()->json($editoras, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $editoras = Editoras::findOrFail($id);
        $editoras->update($request->all());

        return response()->json($editoras, 200);
    }

    public function delete($id)
    {
        Editoras::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}