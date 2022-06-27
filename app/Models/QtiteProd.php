<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class QtiteProd extends Model
{
    use HasFactory;

    public static function getQteProd($cleprod)
    {
        $select='SELECT * FROM data_QTEPROD WHERE data_QTEPROD.PRCLEUNIK='.$cleprod;
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

    public static function updateEntreeQteProd($qteStock,$cleProd)
    {
        $req="UPDATE data_QTEPROD SET data_QTEPROD.QTE_STOCK=data_QTEPROD.QTE_STOCK+$qteStock, data_QTEPROD.MVT_DERNIER=GETDATE() WHERE data_QTEPROD.PRCLEUNIK=$cleProd";
        $resultat=Connection::gestionConnection($req);
        return $resultat;
    }
    
    public static function updateSortieQteProd($qteStock,$cleProd)
    {
        $req="UPDATE data_QTEPROD SET data_QTEPROD.QTE_STOCK=data_QTEPROD.QTE_STOCK-$qteStock, data_QTEPROD.MVT_DERNIER=GETDATE() WHERE data_QTEPROD.PRCLEUNIK=$cleProd";
        $resultat=Connection::gestionConnection($req);
        return $resultat;
    }

    public static function addQteProd($cleProd,$qteStock,$date_inv)
    {
        $req="INSERT  INTO data_QTEPROD(PRCLEUNIK,QTE_STOCK,ALERTE,DATE_INV,QTE_INV,MVT_INITIAL,MVT_DERNIER)
        VALUES($cleProd,$qteStock,1,$date_inv,50,GETDATE(),GETDATE())";
        $resultat=Connection::gestionConnection($req);
        return $resultat;
    }
    
}
