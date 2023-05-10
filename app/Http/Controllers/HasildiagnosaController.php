<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasildiagnosaController extends Controller
{
    public function index(){
        $title = 'Hasil Diganosa';
        return view('diagnosa.hasildiagnosa',compact('title'));
    }
}
