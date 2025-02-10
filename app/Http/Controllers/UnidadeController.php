<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use App\Models\Bandeira;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function index()
    {
        return Unidade::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_fantasia' => 'required|string',
            'razao_social' => 'required|string',
            'cnpj' => 'required|unique:unidade,cnpj',
            'bandeira_id' => 'required|exists:bandeira,id',
        ]);
        return Unidade::create($request->all());
    }

    public function show($id)
    {
        return Unidade::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $unidade = Unidade::findOrFail($id);
        $unidade->update($request->all());
        return $unidade;
    }

    public function destroy($id)
    {
        Unidade::destroy($id);
        return response()->json(null, 204);
    }
}
