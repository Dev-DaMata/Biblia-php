<?php

use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\VersiculoController;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Function_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/testamento', [TestamentoController::class, 'index']);
Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
Route::post('/testamento', [TestamentoController::class, 'store']);
Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/{id}', [LivroController::class, 'show']);
Route::post('/livro', [LivroController::class, 'store']);
Route::put('/livro/{id}', [LivroController::class, 'update']);
Route::delete('/livro/{id}', [LivroController::class, 'destroy']);
/*
Route::get('/versiculo', [VersiculoController::class, 'index']);
Route::get('/versiculo::create($request->all());/{id}', [VersiculoController::class, 'show']);
Route::post('/versiculo', [VersiculoController::class, 'store']);
Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);
*/
/*
Route::apiResource('testamento', TestamentoController::class);//dessa forma só precisa definir uma vez
Route::apiResource('livro', LivroController::class);//dessa forma só precisa definir uma vez
Route::apiResource('versiculo', VersiculoController::class);//dessa forma só precisa definir uma vez
*/
Route::apiResources([//dessa forma só precisa definir uma vez
    'testamento' => TestamentoController::class,
    'livro' => LivroController::class,
    'versiculo' => VersiculoController::class
]);

Route::middleware('auth:sanctum',VersiculoController::class)->get('/user', function (Request $request) {
    return $request->user();
});
