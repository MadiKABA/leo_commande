<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Connection;

class ClavierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$table="boutique_data_Clavier";
        $table="etudiants";
        return  Models::getAll($table);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        //$json_data=json_decode(\json_encode($data));
        $nom=json_decode($data['nom']);
        $email=json_decode(json_encode($data['email']));
        $json_data=json_encode($data);
        $etudiant=json_decode($json_data);
        echo 'Nom: '.$etudiant->nom.' Email: '.$etudiant->email;
        $req="INSERT INTO etudiants(nom,email) VALUES('$etudiant->nom','$etudiant->email');";
        //dd($req);
        $resultat=Connection::gestionConnection($req);

        echo $resultat;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
