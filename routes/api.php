<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::post("login", [AuthController::class, "login"]);
Route::apiResource('livres', LivreController::class)->only('index','show');
Route::middleware("auth")->group(
    function(){
Route::apiResource('livres', LivreController::class)->only('store','destroy');
Route::post('livres/{livre}',[LivreController::class, "update"]);
Route::get("logout", [AuthController::class, "logout"]);
Route::get("refresh", [AuthController::class, "refresh"]);
Route::delete('livres/{id}', [LivreController::class, "forceDelete"]);
Route::get("livres/trashed", [LivreController::class, "trashed"]);
Route::post('livres/{id}/restore', [LivreController::class, "restore"]);

    }
);

