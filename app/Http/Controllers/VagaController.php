<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Vaga;

class VagaController extends Controller
{
    public function index()
    {
        try {
        return Vaga::OrderBy('created_at', 'DESC')->get();
        } catch (\Exception $e) {
            Log::error('Erro ao salvar vaga: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao buscar vagas: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $vaga = new Vaga();
            $vaga->fill($request->all());
            $vaga->save();
            return response()->json($vaga, 201);
        } catch (\Exception $e) {
            Log::error('Erro ao salvar vaga: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao salvar vaga: ' . $e->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $vaga = Vaga::findOrFail($id);
            return response()->json($vaga, 200);
        } catch (\Exception $e) {
            Log::error('Erro ao buscar vaga: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao buscar vaga: ' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $vagatoupdate = Vaga::findOrFail($id);
            $vagatoupdate->fill($request->all());
            $vagatoupdate->save();
            return response()->json($vagatoupdate, 200);
        } catch (\Exception $e) {
            Log::error('Erro ao editar vaga: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao editar vaga: ' . $e->getMessage()], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $vaga = Vaga::findOrFail($id);
            $vaga->delete();
            return response()->json('Vaga deletada com sucesso', 200);
        } catch (\Exception $e) {
            Log::error('Erro ao deletar vaga: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao deletar vaga: ' . $e->getMessage()], 500);
        }
    }
}
