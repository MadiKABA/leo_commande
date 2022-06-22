<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Connection;

class Models extends Model
{
    use HasFactory;
   
    public static function getAll($table)
    {
        $req="select * from $table";
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
