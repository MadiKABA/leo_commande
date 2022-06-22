<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models;

class SousFamille extends Model
{
    use HasFactory;

    public static function getAll()
    {
        $table="data_SOUS_FAMILLE";
        return Models::getAll($table);
    }
}
