<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importation de tes nouveaux contrôleurs
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\FormateurController;
use App\Http\Controllers\Api\StagiaireController;
use App\Http\Controllers\Api\PublicController;

/*
|--------------------------------------------------------------------------
| ROUTES PUBLIQUES (Accessibles sans être connecté)
|--------------------------------------------------------------------------
*/
Route::prefix('public')->group(function () {
    // Exemple : Route::get('/filieres', [PublicController::class, 'index']);
});

/*
|--------------------------------------------------------------------------
| ROUTES PROTÉGÉES (Nécessitent un token de connexion)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    // 1. Espace Administrateur
    Route::prefix('admin')->group(function () {
        // les routes de Sprint 2 ici
    });

    // 2. Espace Formateur
    Route::prefix('formateur')->group(function () {
        // les routes de Sprint 2 ici
    });

    // 3. Espace Stagiaire
    Route::prefix('stagiaire')->group(function () {
        // les routes de Sprint 2 ici
    });

    // Route de test pour récupérer l'utilisateur connecté (Utile pour Yasmine)
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
