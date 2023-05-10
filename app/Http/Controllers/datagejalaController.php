<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gejala;
use PhpParser\Node\Stmt\ElseIf_;
use RealRashid\SweetAlert\Facades\Alert;


class datagejalaController extends Controller
{
    public function index(){
        $title = "Data Gejala";
        $datagejala = gejala::all();
        $kode = gejala::select('kode_gejala')->orderBy('kode_gejala', 'desc')->first();

        if ($kode != null) {
            $pecah  = explode("G", $kode->kode_gejala);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "G0".$number;
            }else{
                $kode   = "G".$number;
            }
        }else{
            $kode = "G01";
        }
        return view('admin.page.datagejala' , compact(['title', 'datagejala', 'kode']));
    }

    public function create(){
        return view('admin.page.gejala');
    }

    public function store(Request $request){

        $request->validate([
            'kode_gejala' => 'required|unique:t_gejala',
            'nama_gejala' => 'required',
        ]);

            gejala::create($request->post());
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

}
