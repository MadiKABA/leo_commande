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
        $req= $req = "select * from $table";
        $resultats=Connection::gestionConnection($req);
        while ($resultat = odbc_fetch_array($resultats)) {
            $data[] = json_encode($resultat);
        }
        return response()->json($data);
    }
}
