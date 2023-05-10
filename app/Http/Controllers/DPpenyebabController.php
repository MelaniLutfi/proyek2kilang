<?php

namespace App\Http\Controllers;

use App\Models\penyakit;
use App\Models\Penyebab;
use App\Models\DPpenyebab;
use Illuminate\Http\Request;

class DPpenyebabController extends Controller
{
    public function index(){
        $title = "Detail Penyakit | Penyebab";
        $penyakit = penyakit::all();
        $penyebab = Penyebab::all();
        $datadetailpenyebab = DPpenyebab::with(['penyakit','penyebab'])->get();
        return view('admin.page.detailpenyakit.penyebab' , compact(['title', 'datadetailpenyebab', 'penyakit', 'penyebab']));
    }

    public function create(){
        return view('admin.page.gejala');
    }

    public function store(Request $request){

        $request->validate([
            'id_penyakit' => 'required',
            'id_penyebab' => 'required',
        ]);

            DPpenyebab::create($request->post());
            return redirect()->route('detailpenyakit_penyebab.index');

    }

    public function destroy($id){
        $gejala = DPpenyebab::find($id);
        $gejala->delete();
        return redirect()->route('detailpenyakit_penyebab.index');
    }

    public function edit($id){
        $gejala = DPpenyebab::find($id);
        return view('admin.page.datagejala', compact(['gejala']));
    }

    public function update($id, Request $request){
        $gejala = DPpenyebab::find($id);
        $gejala->update($request->except(['_token', 'submit']));
        return redirect()->route('detailpenyakit_penyebab.index');
    }
}
