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

        $select='SELECT * FROM data_Mouvements WHERE data_Mouvements.entree='.$entree;
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {

            //$mouvement[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $mouvement[]=json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($mouvement))
        {
            return null;
        }else {
            //return response()->json($mouvement);
            return $mouvement;
        }
    }

    public static function getByPeriod($datedebut,$datefin){
        $datedebutFormat = date('Ymd',strtotime($datedebut));
        $datefinFormat = date('Ymd',strtotime($datefin));

        $select="SELECT * FROM data_Mouvements WHERE data_Mouvements.date_mvt BETWEEN $datedebutFormat AND $datefinFormat";
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {

            //$mouvement[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $mouvement[]=json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($mouvement))
        {
            return null;
        }else {
            return $mouvement;
        }
    }
}
