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
}
