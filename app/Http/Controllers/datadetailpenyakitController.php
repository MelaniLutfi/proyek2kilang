<?php

namespace App\Http\Controllers;

use App\Models\DPgejala;
use Illuminate\Http\Request;
use App\Models\DetailPenyakit;
use App\Models\penyakit;
use Illuminate\Support\Facades\DB;

class datadetailpenyakitController extends Controller
{
    public function index(){
        $title = "Detail Penyakit";
        $datapenyakit = penyakit::with(['gejala', 'dpPenyebab', 'dpSolusi'])->get();
        // $gejala   = DPgejala::with('gejala')->where($datapenyakit)->get();
        return view('admin.page.detailpenyakit.DetailPenyakit' , compact(['title', 'datapenyakit']));
    }

    // public function create(){
    //     return view('admin.page.penyakit');
    // }

    // public function store(Request $request){

    //     $request->validate([
    //         'id_penyakit' => 'required',
    //         'id_gejala' => 'required',
    //     ]);

    //     DPgejala::create($request->post());
    //     return redirect()->route('detaipenyakit_gejala.index');

    // }

    // public function destroy($id){
    //     $namapenyakit = DetailPenyakit::find($id);
    //     $namapenyakit->delete();
    //     return redirect()->route('datapenyakit.index');
    // }

    // public function edit($id){
    //     $namapenyakit = DetailPenyakit::find($id);
    //     return view('admin.page.penyakit', compact(['namapenyakit']));
    // }

    // public function update($id, Request $request){
    //     $namapenyakit = DetailPenyakit::find($id);
    //     $namapenyakit->update($request->except(['_token', 'submit']));
    //     return redirect()->route('datapenyakit.index');
    // }
}
