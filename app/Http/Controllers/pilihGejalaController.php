<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\datapasien;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class pilihGejalaController extends Controller
{

    public function index(Request $request){
        $title = "Data Gejala";
        $datagejala = gejala::all();
        return view('diagnosa.gejala' , compact(['title', 'datagejala']));
    }

    public function create(){
        return view('admin.page.gejala');
    }

    public function store(Request $request){
        gejala::create($request->except(['_token','submit']));
        return redirect()->route('datagejala.index');

    }

    public function destroy($id){
        $gejala = gejala::find($id);
        $gejala->delete();
        return redirect()->route('datagejala.index');
    }

    public function edit($id){
        $gejala = gejala::find($id);
        return view('admin.page.datagejala', compact(['gejala']));
    }

    public function update($id, Request $request){
        $gejala = gejala::find($id);
        $gejala->update($request->except(['_token', 'submit']));
        return redirect()->route('datagejala.index');
    }

    // public function tambah_movlist(Request $request)
    // {
        
        
    //     $request->validate([
    //         'poster'      => 'mimes: jpg,png,jpeg'
    //     ]);
            
    //     if ($request->file('poster')) {
    //         $poster = $request->file('poster')->store('poster_film', 'public');
    //     }
        
    //     $movielist = new Movielist();
    //     $movielist->poster = $poster;
    //     $movielist->judul =$request->judul;
    //     $movielist->tahun =$request->tahun;
    //     $movielist->genre =array_keys($request->genre);
    //     $movielist->rating =$request->rating;
    //     $movielist->biaya_produksi =$request->b_produk;
    //     $movielist->pendapatan = $request->pendapatan;
    //     $movielist->sinopsis =$request->sinopsis;
    //     $movielist->save();
    
    //     return redirect('/adminmovielist');
    // } 

}
