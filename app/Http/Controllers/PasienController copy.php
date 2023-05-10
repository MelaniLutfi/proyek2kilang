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
        return view('diagnosa.gejala');
    }

    public function store(request $request)
    {
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'nama'           => 'required',
            'usia_kehamilan' => 'required|integer',
            'umur'           => 'required|integer',
            'alamat'         => 'required',
            'phone'          => 'required'
           
         ]); 
         
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data                 = new Pasien;
        $data->id             = Uuid::uuid4() -> getHex();
        $data->nama_lengkap   = $request->nama;
        $data->usia_kehamilan = $request->usia_kehamilan;
        $data->umur           = $request->umur;
        $data->alamat         = $request->alamat;
        $data->no_hp          = $request->phone;
        $data->save();

        $request->session()->put('id',$data->id);
        $request->session()->put('nama',$data->nama_lengkap);

        return redirect('/diagnosa')->with('success','Berhasil Registarasi');
    }
}
