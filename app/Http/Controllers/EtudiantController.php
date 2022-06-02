<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $connection=new Connection();
       /*$table='boutique'.'/'.'data'.'/'.'Clavier';
        $req= $req = "select * from  boutique_data_famille";
        //$etudiants=$connection->gestionConnection($req);
        $etudiants=Connection::gestionConnection($req);
       // return view('etudiant', ['etudiants' => $etudiants]);
       while ($etudiant = odbc_fetch_array($etudiants)) {
            $content[] = json_encode($etudiant);
        }*/
        return Models::getAll();
        
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
