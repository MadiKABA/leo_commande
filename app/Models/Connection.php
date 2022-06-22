<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    public static function gestionConnection($requette)
    {
        $dsn="driver={HFSQL};Server Name=noumkia;Serve Port=4900;Database=LEOGES252;UID=kaba; PWD=";

        $conn = odbc_connect($dsn, '', '');
        ini_set('memory_limit', '-1');
        $result=odbc_exec($conn,$requette);
        return $result; 
        odbc_close($conn);
    }

    /*public static function getConnexion($requette)
    {
            $hf_hostname = "noumkia";
            $hf_port = "4900";
            $hf_database = "LEOGES252";
            $hf_user = "kaba";
            $hf_password = "";
            
            $hf_dsn = sprintf("odbc:DRIVER={HFSQL};DNS={HFSQL};Server Name=%s; Server Port=%s;Database=%s;UID=%s;PWD=%s;", $hf_hostname, $hf_port, $hf_database, $hf_user, $hf_password);
        try
        {
            $conn=new PDO($hf_dsn);
            $pstm=$conn->prepare($requette);
            $result=$pstm->execute();
            return $result; 
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }*/
}

