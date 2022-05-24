<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Persons extends Controller 
{
    public function index()
    {
      
        $persones=DB::select(DB::raw("select * from Persons"));
        return view('persones', ['persones' => $persones]);
       
       
    }
    /*code de connexion avec php simple
    <?php
$dsn="driver={HFSQL};Server Name=localhost;Serve Port=4900;Database=dbtest;UID=admin; PWD=";


$conn = odbc_connect($dsn, '', '');


if($conn===false) {
    echo "erreur cnx odbc : " . odbc_errormsg()."\r\n";
    } else {
        echo "success cnx odbc : " . odbc_errormsg()."\r\n";
        $req = "select * from categories;";
        $rest=odbc_do($conn,$req);

        while (odbc_fetch_into($rest, $rowt)){
        echo $rowt[0]." ".$rowt[1]."<br>";
        }
    }*/

}
