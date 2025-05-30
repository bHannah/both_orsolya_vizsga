<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function getSzavak(){
        $data = DB::table('szavak')
        ->get();

        return $data;
    }

    public function getSzavakTemankent($temaId){
        $data = DB::table('szavak')
        ->where('temaId', '=', $temaId)
        ->get();

        return $data;
    }
}
