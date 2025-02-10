<?php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class BandeiraController extends Controller
{
    public function index()
    {
        return Bandeira::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'grupo_economico_id' => 'required|exists:grupo_economico,id',
        ]);
        return Bandeira::create($request->all());
    }

    public function show($id)
    {
        return Bandeira::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $bandeira = Bandeira::findOrFail($id);
        $bandeira->update($request->all());
        return $bandeira;
    }

    public function destroy($id)
    {
        Bandeira::destroy($id);
        return response()->json(null, 204);
    }
}
