<?php

namespace App\Http\Controllers;

use App\Models\Penyebab;
use Illuminate\Http\Request;

class datapenyebabController extends Controller
{
    public function index(){
        $title = "Data Penyebab";
        $datapenyebab = Penyebab::all();
        $kode = Penyebab::select('kode_penyebab')->orderBy('kode_penyebab', 'desc')->first();

        if ($kode != null) {
            $pecah  = explode("PE", $kode->kode_penyebab);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "PE00".$number;
            }else{
                $kode   = "PE0".$number;
            }
        }else{
            $kode = "PE001";
        }
        return view('admin.page.datapenyebab' , compact(['title', 'datapenyebab' , 'kode']));

    }

    public function create(){
        return view('admin.page.datapenyebab');
    }

    public function store(Request $request){

        $request->validate([
            'kode_penyebab' => 'required|unique:t_penyebab',
            'nama_penyebab' => 'required',
        ]);

            Penyebab::create($request->post());
            return redirect()->route('datapenyebab.index');

    }

    public function destroy($id){
        $datapenyebab = Penyebab::find($id);
        $datapenyebab->delete();
        return redirect()->route('datapenyebab.index');
    }

    public function edit($id){
        $datapenyebab = Penyebab::find($id);
        return view('admin.page.datagejala', compact(['gejala']));
    }

    public function update($id, Request $request){
        $datapenyebab = Penyebab::find($id);
        $datapenyebab->update($request->except(['_token', 'submit']));
        return redirect()->route('datapenyebab.index');
    }
}
