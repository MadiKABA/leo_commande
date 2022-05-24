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
}
