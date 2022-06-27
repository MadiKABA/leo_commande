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
