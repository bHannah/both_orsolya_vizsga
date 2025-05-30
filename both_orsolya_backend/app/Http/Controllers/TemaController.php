<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function getTema(){
        $data = DB::table('tema')
        ->get();

        return $data;
    }
}
