<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Diagnosa;
use App\Models\penyakit;
use Illuminate\Http\Request;

class DatadiagnosaController extends Controller
{
    public function index(){
        $title = "Data Diagnosa";
        $penyakit = penyakit::all();
        $pasien = Pasien::all();
        $datadiagnosa = Diagnosa::with('pasien','penyakit')->get();
        return view('admin.page.datadiagnosa' , compact(['title', 'datadiagnosa']));
    }

    public function create(){
        return view('admin.page.Diagnosa');
    }

    public function store(Request $request){
        Diagnosa::create($request->except(['_token','submit']));
        return redirect()->route('Diagnosa.index');

    }

    public function destroy($id){
        $Diagnosa = Diagnosa::find($id);
        $Diagnosa->delete();
        return redirect()->route('datadiagnosa.index');
    }

    // public function edit($id){
    //     $Diagnosa = Diagnosa::find($id);
    //     return view('admin.page.penyakit', compact(['Diagnosa']));
    // }

    // public function update($id, Request $request){
    //     $namapenyakit = Diagnosa::find($id);
    //     $namapenyakit->update($request->except(['_token', 'submit']));
    //     return redirect()->route('Diagnosa.index');
    // }
}
