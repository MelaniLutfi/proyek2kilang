<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\datapasien;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index(){
        $title = "Diagnosa";
        return view('diagnosa.datadiri' , compact(['title']));
    }


    public function edit($id){
        $datagejala = gejala::all();
        return view('diagnosa.gejala' , compact(['title', 'datagejala']));
    }

    public function store(Request $request, datapasien $datapasien){

        datapasien::create($request->except(['_token','submit']));
        //email
        $nama = $request->input('nama');
        //query->id
        return redirect('/diagnosa/pilihgejala');
    }
}
