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

    public static function add($data)
    {
        $json_data=json_encode($data);
        $famille=json_decode($json_data);
        //dd($famille->date_mvt);
        $date_mvt = date('Ymd',strtotime($famille->date_mvt));
        $req="INSERT INTO data_Mouvements(PRCLEUNIK,LibProd,date_mvt,entree,type_mvt,Quantite,montant,ref_mvt,Observations,pmp,PrixAchat,PrixVente) 
        VALUES('$famille->PRCLEUNIK','$famille->LibProd',$date_mvt,$famille->entree,'$famille->type_mvt','$famille->Quantite','$famille->montant','$famille->ref_mvt',
        '$famille->Observations','$famille->pmp','$famille->PrixAchat','$famille->PrixVente');";
    
       //$resultat=Connection::gestionConnection($req);
             
      if(QtiteProd::getQteProd($famille->PRCLEUNIK)==null)
      {
        return QtiteProd::addQteProd($famille->PRCLEUNIK,$famille->Quantite,$date_mvt);
        //return "table vide";
      }else{
        if($famille->entree)
        {
            return QtiteProd::updateEntreeQteProd($famille->Quantite,$famille->PRCLEUNIK);
        }else{
            return QtiteProd::updateSortieQteProd($famille->Quantite,$famille->PRCLEUNIK);
        }
        //return QtiteProd::getQteProd($famille->PRCLEUNIK);
      }
       
    }

    public static function getByEntree($entree){

        $select='SELECT * FROM data_Mouvements WHERE data_Mouvements.entree='.$entree;
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            $data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
        }
        if(empty($data))
        {
            return null;
        }else {
            return response()->json($data);
        }
    }

    public static function getByPeriod(){

        $select="SELECT * FROM data_Mouvements WHERE data_Mouvements.date_mvt BETWEEN '2022-06-09' AND '2024-01-01'";
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            $data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
        }
        if(empty($data))
        {
            return null;
        }else {
            return response()->json($data);
        }
    }
}
