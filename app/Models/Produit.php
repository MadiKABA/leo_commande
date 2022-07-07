<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models;

class Produit extends Model
{
    use HasFactory;
    

    public static function getAll()
    {
        $table="data_produits";
        return Models::getAll($table);
    }

    public static function getById($cleprod)
    {
        $select='SELECT * FROM data_produits WHERE data_produits.PRCLEUNIK='.$cleprod;
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            //$data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $data[]= json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($data))
        {
            return null;
        }else {
            return $data;
        }
    }

    public static function pagedList($page)
    {
        /*$requette='select * from data_produits';
        $result=Connection::gestionConnection($requette);
        $nbLinge=odbc_num_rows($result);
        $nbreProduitParPage=100;
        $nbrePage=ceil($nbLinge/$nbreProduitParPage);*/
        $nbreProduitParPage=100;
        $nbrePage=Produit::getCount();
        $debut=($page-1)*$nbreProduitParPage;
        $req="select * from data_produits order by PRCLEUNIK limit $debut,$nbreProduitParPage";

        $resultats=Connection::gestionConnection($req);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            //$data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $data[]= json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($data))
        {
            return null;
        }else {
            return $data;
        }
        
    }
    public static function getByName($nom){
        $requette="select * from data_produits where nom_court like '%$nom%' order by PRCLEUNIK limit 250";
        $resultats=Connection::gestionConnection($requette);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            //$data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $data[]= json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($data))
        {
            return null;
        }else {
            return $data;
        }
    }
    public static function getCount()
    {
        $requette='select * from data_produits';
        $result=Connection::gestionConnection($requette);
        $nbLinge=odbc_num_rows($result);
        $nbreProduitParPage=100;
        $nbrePage=ceil($nbLinge/$nbreProduitParPage);
        return $nbrePage;
    }

    public static function getByFamilly($facleunik)
    {
        $select='SELECT * FROM data_produits WHERE data_produits.FACLEUNIK='.$facleunik.'limit 200';
        $resultats=Connection::gestionConnection($select);
        while ($resultat = odbc_fetch_array($resultats)) {
           
            //$data[]= json_decode(json_encode(array_map("utf8_encode", $resultat)),JSON_UNESCAPED_SLASHES);
            $data[]= json_encode(array_map("utf8_encode", $resultat));
        }
        if(empty($data))
        {
            return null;
        }else {
            return $data;
        }
    }
}
