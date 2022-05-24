<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    public function gestionConnection()
    {
        $dsn="driver={HFSQL};Server Name=localhost;Serve Port=4900;Database=dbtest;UID=admin; PWD=";

        $conn = odbc_connect($dsn, '', '');
        return $conn;


       
    }

    
}
