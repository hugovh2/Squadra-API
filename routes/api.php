<?php
use App\Models\Pessoa;
use App\Models\UF;
use App\Models\Bairro;
use App\Models\Endereco;
use App\Models\Municipio;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UfController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\BairroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/// Rota Pessoa
Route::get('/pessoa', [PessoaController::class, 'index']);
Route::get('/pessoa/search/{name}', [PessoaController::class, 'search']);
Route::get('/pessoa/{id}', [PessoaController::class, 'show']);
Route::post('/pessoa', [PessoaController::class, 'store']);
Route::put('/pessoa/{id}', [PessoaController::class, 'update']);


/// Rota UF
Route::get('/uf', [UfController::class, 'index']);
Route::get('/uf/sigla/{sigla}', [UfController::class, 'search']);
Route::get('/uf/{id}', [UfController::class, 'show']);
Route::post('/uf', [UfController::class, 'store']);
Route::put('/uf/{id}', [UfController::class, 'update']);


/// Rota Bairro
Route::get('/bairro', [BairroController::class, 'index']);
Route::get('/bairro/search/{sigla}', [BairroController::class, 'search']);
Route::get('/bairro/{id}', [BairroController::class, 'show']);
Route::post('/bairro', [BairroController::class, 'store']);
Route::put('/bairro/{id}', [BairroController::class, 'update']);


/// Rota Endereco
// Route::get('/endereco', [UfController::class, 'index']);
// Route::get('/endereco/search/{sigla}', [UfController::class, 'search']);
// Route::get('/endereco/{id}', [UfController::class, 'show']);
// Route::post('/endereco', [UfController::class, 'store']);
// Route::put('/endereco/{id}', [UfController::class, 'update']);

/// Rota Municipio
Route::get('/municipio', [MunicipioController::class, 'index']);
Route::get('/municipio/search/{sigla}', [MunicipioController::class, 'search']);
Route::get('/municipio/{id}', [MunicipioController::class, 'show']);
Route::post('/municipio', [MunicipioController::class, 'store']);
Route::put('/municipio/{id}', [MunicipioController::class, 'update']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
