<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class GrupoEconomicoController extends Controller
{
    // Método para listar todos os grupos econômicos
    public function index()
    {
        $grupos = GrupoEconomico::all();
        return response()->json($grupos);
    }

    // Método para criar um novo grupo econômico
    public function store(Request $request)
    {
        // Valida os dados antes de criar o grupo
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        // Cria o grupo e retorna uma resposta
        $grupo = GrupoEconomico::create($request->all());
        return response()->json($grupo, 201);
    }

    // Método para exibir um grupo econômico específico
    public function show($id)
    {
        $grupo = GrupoEconomico::findOrFail($id);
        return response()->json($grupo);
    }

    // Método para atualizar um grupo econômico existente
    public function update(Request $request, $id)
    {
        // Valida os dados antes de atualizar
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        // Encontra o grupo e atualiza
        $grupo = GrupoEconomico::findOrFail($id);
        $grupo->update($request->all());

        return response()->json($grupo);
    }

    // Método para deletar um grupo econômico
    public function destroy($id)
    {
        // Encontra o grupo e deleta
        $grupo = GrupoEconomico::findOrFail($id);
        $grupo->delete();

        return response()->json(null, 204);  // Retorna uma resposta de sucesso sem conteúdo
    }
}
