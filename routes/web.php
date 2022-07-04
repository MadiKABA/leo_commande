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

Route::get('produits',[ProduitController::class,'index']);
Route::get('produits/{id}',[ProduitController::class,'show'])->name('produits.show');
Route::post('produitsByFamille',[ProduitController::class,'getByFamilly'])->name('produits.getByFamilly');
Route::get('mouvements}',[MouvementsController::class,'index']);
Route::get('mouvementsEntreStock}',[MouvementsController::class,'EntreStock']);
