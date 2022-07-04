<?php

namespace App\Http\Controllers;

use App\Models\Mouvements;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MouvementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //echo"mouvements";
        $mouvements=Mouvements::getAll();
        return view('mouvements.list',compact('mouvements'));
        //return $mouvements;
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
        return Mouvements::add($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function EntreStock()
    {
       $data=
       ' {
            "PRCLEUNIK":12,
            "LibProd":"ARACHIDES GRILLEES SAL. 200G",
            "date_mvt":"12/31/2022",
            "entree":true,
            "type_mvt":1,
            "Quantite":50,
            "montant":665000,
            "ref_mvt":"ref1",
            "Observations":"inventaire juillet",
            "pmp":601.69,
            "PrixAchat":601.69,
            "PrixVente":701
        }';
        $djs=\json_decode($data);
        //dd($djs);
        Mouvements::add($djs);
        return view('mouvements.entreStock');
    }
    public function SaveEntreStock()
    {
        $client = new Client();
        //$url = "http://127.0.0.1:8000/api/mouvements";
        $url = "http://127.0.0.1:8082/api/mouvements";
        $response = Http::get($url)->json();
        dd($response);
        return view('mouvements.entreStock',compact("responseBody"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mouvements  $mouvements
     * @return \Illuminate\Http\Response
     */
    public function show(Mouvements $mouvements)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getByEntree($entree)
    {
        return Mouvements::getByEntree($entree);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mouvements  $mouvements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mouvements $mouvements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mouvements  $mouvements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mouvements $mouvements)
    {
        //
    }
}
