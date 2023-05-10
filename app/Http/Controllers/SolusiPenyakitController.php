<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiPenyakitController extends Controller
{
    public function index(){
        $title = "Data Solusi";
        $datasolusi = Solusi::all();
        return view('admin.page.datasolusi' , compact(['title', 'datasolusi']));
    }

    public function create(){
        return view('admin.page.Solusi');
    }

    public function store(Request $request){

        $request->validate([
            'kode_solusi' => 'required|unique:t_Solusi',
            'nama_solusi' => 'required',
        ]);

            Solusi::create($request->post());
            return redirect()->route('datasolusi.index');

    }

    public function destroy($id){
        $Solusi = Solusi::find($id);
        $Solusi->delete();
        return redirect()->route('datasolusi.index');
    }

    public function edit($id){
        $Solusi = Solusi::find($id);
        return view('admin.page.datasolusi', compact(['Solusi']));
    }

    public function update($id, Request $request){
        $Solusi = Solusi::find($id);
        $Solusi->update($request->except(['_token', 'submit']));
        return redirect()->route('datasolusi.index');
    }

}
