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
