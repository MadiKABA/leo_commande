<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models;
use App\Models\Connection;

class Vente extends Model
{
    use HasFactory;

    public static function reglement($jour)
    {
        $table="data_histo_reglem_".$jour;
        return Models::getAll($table);
    }

    public static function bases($jour)
    {
        $table="data_histo_bases_".$jour;
        return Models::getAll($table);
    }
    public static function histo($jour)
    {
        $table="data_histo_histo_".$jour;
        return Models::getAll($table);
    }
    public static function histoEnt($jour)
    {
        $table="data_histo_HistoEnt_".$jour;
        return Models::getAll($table);
    }

    public static function notes($jour)
    {
        $table="data_histo_Notes_".$jour;
        return Models::getAll($table);
    }
    public static function notesEnt($jour)
    {
        $table="data_histo_NotesEnt_".$jour;
        return Models::getAll($table);
    }

    public static function notesReglement($jour)
    {
        $table="data_histo_NotesReglem_".$jour;
        return Models::getAll($table);
    }
    public static function vente($jour)
    {
        $histo="data_histo_histo_".$jour;
        $bases="data_histo_bases_".$jour;
        $reglememts="data_histo_reglem_".$jour;

        $req="select * from $bases as b, $reglememts as r where b.num_histo=r.num_histo";
        $resultats=Connection::gestionConnection($req);
        while ($resultat = odbc_fetch_array($resultats)) {
            
            $data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
        }
        if(empty($data))
        {
            return 'table vide';
        }else {
            return response()->json($data);
        }
        
    }

    
}
