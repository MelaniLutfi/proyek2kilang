<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomelaraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Home | Admin";
        $statpasien = DB::table('t_datapasien')->count();
        $statdiagnosa = DB::table('t_diagnosa')->count();
        $statpenyakit = DB::table('t_penyakit')->count();
        $statgejala = DB::table('t_gejala')->count();
        return view('admin.index', compact(['title', 'statpasien' , 'statdiagnosa' , 'statpenyakit' , 'statgejala']));
    }
}
