<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use App\Models\DPsolusi;
use App\Models\penyakit;
use Illuminate\Http\Request;

class DPsolusiController extends Controller
{
    public function index(){
        $title = "Detail Penyakit | Solusi";
        $penyakit = penyakit::all();
        $solusi = Solusi::all();
        $datadetailsolusi = DPsolusi::with(['penyakit','solusi'])->get();
        return view('admin.page.detailpenyakit.solusi' , compact(['title', 'datadetailsolusi', 'penyakit', 'solusi']));
    }

    public function create(){
        return view('admin.page.gejala');
    }

    public function store(Request $request){

        $request->validate([
            'id_penyakit' => 'required',
            'id_solusi' => 'required',
        ]);

            DPsolusi::create($request->post());
            return redirect()->route('detailpenyakit_solusi.index');

    }

    public function destroy($id){
        $solusi = DPsolusi::find($id);
        $solusi->delete();
        return redirect()->route('detailpenyakit_solusi.index');
    }

    public function edit($id){
        $solusi = DPsolusi::find($id);
        return view('admin.page.datagejala', compact(['solusi']));
    }

    public function update($id, Request $request){
        $solusi = DPsolusi::find($id);
        $solusi->update($request->except(['_token', 'submit']));
        return redirect()->route('detailpenyakit_solusi.index');
    }
}
