<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapasien;


class datapasienController extends Controller
{
    public function index(){
        $title = "Data Pasien";
        $datapasien = datapasien::all();
        return view('admin.page.datapasien' , compact(['title', 'datapasien']));
    }

    public function create(){
        return view('admin.page.datapasien');
    }

    public function store(Request $request){
        datapasien::create($request->except(['_token','submit']));
        return redirect()->route('datapasien.index');

    }

    public function destroy($id){
        $datapasien = datapasien::find($id);
        $datapasien->delete();
        return redirect()->route('datapasien.index');
    }

    public function edit($id){
        $datapasien = datapasien::find($id);
        return view('admin.page.penyakit', compact(['datapasien']));
    }

    public function update($id, Request $request){
        $namapenyakit = datapasien::find($id);
        $namapenyakit->update($request->except(['_token', 'submit']));
        return redirect()->route('datapasien.index');
    }
}
