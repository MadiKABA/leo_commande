<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models;

class Famille extends Model
{
    use HasFactory;

    public static function getAll()
    {
        $table="data_famille";
        return Models::getAll($table);
    }
    public static function getById($cleprod)
    {
        $select='SELECT * FROM data_famille WHERE data_famille.FACLEUNIK='.$cleprod;
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
    public static function add($data)
    {
        $nom=json_decode(json_encode($data['NOM']));
        $touche=json_decode(json_encode($data['touche']));
        $groupe=json_decode(json_encode($data['IDGROUPE']));
        $json_data=json_encode($data);
        $famille=json_decode($json_data);
        echo $nom;
        //echo 'Nom: '.$etudiant->nom.' Email: '.$etudiant->email;
        //$req="INSERT INTO famille(NOM,touche,IDGROUPE) VALUES('$famille->nom','$famille->touche',$famille->groupe);";
        $req="INSERT INTO data_famille(NOM,touche,IDGROUPE) VALUES('$nom','$touche',$groupe);";
        //dd($req);
        $resultat=Connection::gestionConnection($req);

        echo $resultat;
    }
}
