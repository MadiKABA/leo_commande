<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ClavierController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('etudiants',EtudiantController::class);
Route::apiResource('claviers',ClavierController::class);
Route::apiResource('produits',ProduitController::class);
Route::apiResource('categories',CategorieController::class);
Route::apiResource('familles',FamilleController::class);
Route::apiResource('sousFamilles',SousFamilleController::class);


Route::get('vente/reglements/{jour}',[VenteController::class,'reglement']);
Route::get('vente/bases/{jour}',[VenteController::class,'bases']);
Route::get('vente/histo/{jour}',[VenteController::class,'histo']);
Route::get('vente/histoEnt/{jour}',[VenteController::class,'histoEnt']);
Route::get('vente/notes/{jour}',[VenteController::class,'notes']);
Route::get('vente/notesReglement/{jour}',[VenteController::class,'notesReglement']);
Route::get('vente/notesEnt/{jour}',[VenteController::class,'notesEnt']);
Route::get('vente/{jour}',[VenteController::class,'ventes']);
