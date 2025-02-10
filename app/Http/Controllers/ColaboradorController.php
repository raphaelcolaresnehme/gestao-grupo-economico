<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        return Colaborador::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:colaborador,email',
            'cpf' => 'required|unique:colaborador,cpf',
            'unidade_id' => 'required|exists:unidade,id',
        ]);
        return Colaborador::create($request->all());
    }

    public function show($id)
    {
        return Colaborador::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $colaborador = Colaborador::findOrFail($id);
        $colaborador->update($request->all());
        return $colaborador;
    }

    public function destroy($id)
    {
        Colaborador::destroy($id);
        return response()->json(null, 204);
    }
}
public function relatorio()
{
    // Recupera todos os colaboradores com suas unidades associadas
    $colaboradores = Colaborador::with('unidade')->get();

    return response()->json($colaboradores); // Retorna os dados em formato JSON
}
