<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\DPgejala;
use App\Models\penyakit;
use Illuminate\Http\Request;

class DPgejalaController extends Controller
{
    
    public function index(){
        $title = "Detail Penyakit | Gejala";
        $penyakit = penyakit::all();
        $gejala = gejala::all();
        $datadetailgejala = DPgejala::with(['penyakit','gejala'])->get();
        return view('admin.page.detailpenyakit.gejala' , compact(['title', 'datadetailgejala', 'penyakit', 'gejala']));
    }

    public function create(){
        return view('admin.page.gejala');
    }

    public function store(Request $request){

        $request->validate([
            'kode_penyakit' => 'required',
            'kode_gejala' => 'required',
        ]);

            DPgejala::create($request->post());
            return redirect()->route('detailpenyakit_gejala.index');
    }

    public function destroy($id){
        $gejala = DPgejala::find($id);
        $gejala->delete();
        return redirect()->route('detailpenyakit_gejala.index');
    }

    public function edit($id){
        $gejala = DPgejala::find($id);
        return view('admin.page.datagejala', compact(['gejala']));
    }

    public function update($id, Request $request){
        $gejala = DPgejala::find($id);
        $gejala->update($request->except(['_token', 'submit']));
        return redirect()->route('detailpenyakit_gejala.index');
    }
}