<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Gejala;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Faker\Provider\pt_PT\PhoneNumber;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{

    public $isoCode = 'ID'; //isocode indonesia

    public function index(){
        $title = "Diagnosa";
        return view('diagnosa.datadiri', compact('title'));
    }

    public function store(request $request)
    {
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'nama'            => 'required',
            'tanggal_lahir'   => 'required',
            'email'           => 'required',
            'no_telp'         => 'required',
            'jenis_kelamin'   => 'required'
           
         ]); 
         
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data                 = new Pasien;
        $data->id = Uuid::uuid4() -> getHex();
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->email = $request->email;
        $data->no_telp= $request->no_telp;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->save();

        $request->session()->put('id',$data->id);
        $request->session()->put('nama',$data->nama);

        return redirect('/diagnosa')->with('success','Berhasil Registarasi');
    }
}
