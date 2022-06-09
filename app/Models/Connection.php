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

    
}

