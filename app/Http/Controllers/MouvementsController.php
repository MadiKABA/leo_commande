<?php

namespace App\Http\Controllers;

use App\Models\Mouvements;
use Illuminate\Http\Request;

class MouvementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo"mouvements";
        return Mouvements::getAll();
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
     * Display the specified resource.
     *
     * @param  \App\Models\Mouvements  $mouvements
     * @return \Illuminate\Http\Response
     */
    public function show(Mouvements $mouvements)
    {
        //
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
