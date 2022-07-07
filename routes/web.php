<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Persons;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ClavierController;
use App\Http\Controllers\MouvementsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produits',[ProduitController::class,'index'])->name("produits.index");
Route::post('produits',[ProduitController::class,'getByName'])->name("produits.getByName");
Route::get('pagedProduit/{id}',[ProduitController::class,'pagedList'])->name("produit.pagedList");
Route::get('produits/{id}',[ProduitController::class,'show'])->name('produits.show');
Route::post('produitsByFamille',[ProduitController::class,'getByFamilly'])->name('produits.getByFamilly');
Route::get('mouvements',[MouvementsController::class,'index'])->name("mouvement.index");
Route::get('mouvementsEntreStock}',[MouvementsController::class,'EntreStock'])->name("mouvements.EntreStock");
Route::post('mouvementsgetEntree',[MouvementsController::class,'getByEntree'])->name("mouvements.getEntree");
Route::post('mouvementsgetByPeriod',[MouvementsController::class,'getByPeriod'])->name("mouvements.getByPeriod");

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
