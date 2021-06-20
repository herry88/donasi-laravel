<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function jumlah($angka_1, $angka_2){
        return  $angka_1 + $angka_2;
    }
}
