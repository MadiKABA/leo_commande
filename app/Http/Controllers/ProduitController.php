<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Produit;
use App\Models\Famille;

class ProduitController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page=2;
        $produits=Produit::getAll($page);
        $familles=Famille::getAll();
        return view('produits.list',compact('produits','familles'));
        //return $produits;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit= Produit::getById($id);
        return view('produits.show',compact('produit'));
        //return Produit::getById($id);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getByFamilly(Request $request){
        $famille=$request["famille"];
        //dd($famille);
        $produits=Produit::getByFamilly($famille);
        $familles=Famille::getAll();
        return view('produits.list',compact('produits','familles'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
