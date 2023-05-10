<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        
        $statpasien = DB::table('t_datapasien')->count();
        $statdiagnosa = DB::table('t_diagnosa')->count();
        $statpenyakit = DB::table('t_penyakit')->count();

        return view('home' , [
            "title" => "Home" ,
            "judul" => "System Pakar Diagnosa" ,
            "judul1" => "Penyakit Tulang" ,
            "tagline" => "Solusi Konsultasi Cepat" ,
            "deskrip" => "System yang khusus dibangun untuk diagnosa Penyakit Tulang" , 
            "deskrip1" => "secara cepat dan dapat dilakukan dimana saja" 
        ], compact(['statpasien', 'statdiagnosa' , 'statpenyakit']));
    }

    
}
