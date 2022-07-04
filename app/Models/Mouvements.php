<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models;

class Mouvements extends Model
{
    use HasFactory;

    public static function getAll()
    {
        $table="data_Mouvements";
        return Models::getAll($table);
    }

    public static function add($mouvement)
    {
        //$mouvement=json_decode($data,true);
        //dd($mouvement);
        $date_mvt = date('Ymd',strtotime($mouvement->date_mvt));
        //dd($mouvement->PrixVente);
        $req="INSERT INTO data_Mouvements(PRCLEUNIK,LibProd,date_mvt,entree,type_mvt,Quantite,montant,ref_mvt,Observations,pmp,PrixAchat,PrixVente)
        VALUES('$mouvement->PRCLEUNIK','$mouvement->LibProd','$date_mvt',$mouvement->entree,'$mouvement->type_mvt','$mouvement->Quantite','$mouvement->montant','$mouvement->ref_mvt',
        '$mouvement->Observations','$mouvement->pmp','$mouvement->PrixAchat','$mouvement->PrixVente');";

       $resultat=Connection::gestionConnection($req);


      if(QtiteProd::getQteProd($mouvement->PRCLEUNIK)==null)
      {
        return QtiteProd::addQteProd($mouvement->PRCLEUNIK,$mouvement->Quantite,$date_mvt);
        //return "table vide";
      }else{
        if($mouvement->entree)
        {
            return QtiteProd::updateEntreeQteProd($mouvement->Quantite,$mouvement->PRCLEUNIK);
        }else{
            return QtiteProd::updateSortieQteProd($mouvement->Quantite,$mouvement->PRCLEUNIK);
        }
        //return QtiteProd::getQteProd($mouvement->PRCLEUNIK);
      }
      //return $resultat;

    }

    public static function getByEntree($entree){

        $select='SELECT * FROM mouvement_Mouvements WHERE mouvement_Mouvements.entree='.$entree;
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {

            $mouvement[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
        }
        if(empty($mouvement))
        {
            return null;
        }else {
            return response()->json($mouvement);
        }
    }

    public static function getByPeriod(){

        $select="SELECT * FROM mouvement_Mouvements WHERE mouvement_Mouvements.date_mvt BETWEEN '2022-06-09' AND '2024-01-01'";
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {

            $mouvement[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
        }
        if(empty($mouvement))
        {
            return null;
        }else {
            return response()->json($mouvement);
        }
    }
}
