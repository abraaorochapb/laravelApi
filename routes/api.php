<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vagas', [VagaController::class, 'index'])-> name('vagas.index');
Route::prefix('/vaga')->group(function () {
    Route::post('/post', [VagaController::class, 'store'])-> name('vagas.store');
    Route::get('/{id}', [VagaController::class, 'show'])-> name('vagas.show');
    Route::put('/{id}', [VagaController::class, 'update'])-> name('vagas.update');
    Route::delete('/{id}', [VagaController::class, 'destroy'])-> name('vagas.destroy');
});