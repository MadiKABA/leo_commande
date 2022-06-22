<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
class VenteController extends Controller
{
    public function reglement($jour)
    {
        return Vente::reglement($jour);
    }

    public function bases($jour)
    {
        return Vente::bases($jour);
    }
    public function histo($jour)
    {
        return Vente::histo($jour);
    }
    public function histoEnt($jour)
    {
        return Vente::histoEnt($jour);
    }

    public function notes($jour)
    {
        return Vente::notes($jour);
    }
    public function notesEnt($jour)
    {
        return Vente::notesEnt($jour);
    }

    public function notesReglement($jour)
    {
        return Vente::notesReglement($jour);
    }

    public function ventes($jour)
    {
        return Vente::vente($jour);
    }
}
