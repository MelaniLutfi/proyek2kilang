<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Http\Request;

class penyakitController extends Controller
{
    public function index(){
        $title = "Data Penyakit";
        $gejala = gejala::all();
        $datapenyakit = penyakit::with('gejala')->get();
        $kode = Penyakit::select('kode_penyakit')->orderBy('kode_penyakit', 'desc')->first();

        if ($kode != null) {
            $pecah  = explode("P", $kode->kode_penyakit);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "P0".$number;
            }else{
                $kode   = "P".$number;
            }
        }else{
            $kode = "P01";
        }

        return view('admin.page.penyakit' , compact(['title', 'datapenyakit', 'gejala' , 'kode']));
    }

    public function create(){
        return view('admin.page.penyakit');
    }

    public function store(Request $request){

        $request->validate([
            'kode_penyakit' => 'required|unique:t_penyakit',
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
        ]);

        $penyakit = penyakit::create($request->post());
        return redirect()->route('datapenyakit.index');

    }

    public function destroy($id){
        $namapenyakit = penyakit::find($id);
        $namapenyakit->delete();
        return redirect()->route('datapenyakit.index');
    }

    public function edit($id){
        $namapenyakit = penyakit::find($id);
        return view('admin.page.penyakit', compact(['namapenyakit']));
    }

    public function update($id, Request $request){
        $namapenyakit = penyakit::find($id);
        $namapenyakit->update($request->except(['_token', 'submit']));
        $namapenyakit->gejala()->sync($request->id_gejala);
        return redirect()->route('datapenyakit.index');
    }
}
