<?php

namespace App\Http\Controllers;

use PDF;
use Validator;
use Ramsey\Uuid\Uuid;
use App\Models\gejala;
use App\Models\Pasien;
use App\Models\Diagnosa;
use App\Models\DPgejala;
use App\Models\penyakit;
use App\Models\DPpenyebab;
use App\Models\DPsolusi;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{    

    public function index(){

        $title = "Diagnosa";
       
        $datagejala = Gejala::all();

        return view('diagnosa.gejala', compact(['datagejala','title']));
    }

    public function store(request $request)
    {        
        $title = "Diagnosa";

        if($request->gejala == null){
            return redirect()->route('diagnosa.gejala')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }

        $diagnosa = $this->knowlage($request->gejala);
        $penyakit = penyakit::where('kode_penyakit', $diagnosa)->first();
        $gejala   = DPgejala::with('gejala')->where('kode_penyakit', $penyakit->kode_penyakit)->get();
        $penyebab = DPpenyebab::with('penyebab')->where('id', $penyakit->id)->get();
        $solusi   = DPsolusi::with('solusi')->where('id', $penyakit->id)->get();
        $pasien   = Pasien::where('id', session()->get('id'))->first();

        $konsultasi = new Diagnosa;
        $konsultasi->id                 = Uuid::uuid4() -> getHex();
        $konsultasi->pasien_id          = $pasien->id;
        $konsultasi->kode_penyakit        = $penyakit->kode_penyakit;
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->save();

        return view('diagnosa.hasildiagnosa', compact('gejala','penyakit','pasien','title', 'konsultasi', 'penyebab' ,'solusi'));
    }

    function knowlage($gejala)
    {   
        $role['P01'] = 0;
        $role['P02'] = 0;
        $role['P03'] = 0;
        $role['P04'] = 0;
        $role['P05'] = 0;
        $role['P06'] = 0;
        $role['P07'] = 0;
        $role['P08'] = 0;
        $role['P09'] = 0;
        $role['P10'] = 0;
        $role['P11'] = 0;
        $role['P12'] = 0;
        $role['P13'] = 0;
        $role['P14'] = 0;
        $role['P15'] = 0;
        $role['P16'] = 0;
        $role['P17'] = 0;
        $role['P18'] = 0;
        $role['P19'] = 0;
        $role['P20'] = 0;
        $role['P21'] = 0;

        for($i=0;$i<count($gejala); $i++) {
            
            //role 1 (P01)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G02' ||
            $gejala[$i] == 'G04' || $gejala[$i] == 'G03' ||
            $gejala[$i] == 'G05' || $gejala[$i] == 'G06' ){

                $role['P01'] = $role['P01'] + 1;
               
            }

              
            //role 2 (P02)
            if($gejala[$i] == 'G07' || $gejala[$i] == 'G08'
            || $gejala[$i] == 'G09' || $gejala[$i] == 'G10'
            || $gejala[$i] == 'G01' || $gejala[$i] == 'G04'){

                $role['P02'] = $role['P02'] + 1;
               
            }

            //role 3 (P03)
            if($gejala[$i] == 'G14' || $gejala[$i] == 'G15'
            || $gejala[$i] == 'G16'){

                $role['P03'] = $role['P03'] + 1;
               
            }

            //role 4 (P04)
            if($gejala[$i] == 'G11'|| $gejala[$i] == 'G12' 
            || $gejala[$i] == 'G13'){

                $role['P04'] = $role['P04'] + 1;
               
            }

            //role 5 (P05)
            if($gejala[$i] == 'G17' || $gejala[$i] == 'G18' 
            || $gejala[$i] == 'G19'){

                $role['P05'] = $role['P05'] + 1;
              
            }

            //role 6 (P06)
            if($gejala[$i] == 'G20' || $gejala[$i] == 'G21' 
            || $gejala[$i] == 'G22'){

                $role['P06'] = $role['P06'] + 1;
               
            }


            //role 7 (P07)
            if($gejala[$i] == 'G23' || $gejala[$i] == 'G24' 
            || $gejala[$i] == 'G25' ){

                $role['P07'] = $role['P07'] + 1;
               
            }


            //role 8 (P08)
            if($gejala[$i] == 'G23' || $gejala[$i] == 'G26' 
            || $gejala[$i] == 'G27' || $gejala[$i] == 'G28'){

                $role['P08'] = $role['P08'] + 1;
              
            }

            //role 9 (P09)
            if($gejala[$i] == 'G23' || $gejala[$i] == 'G25' 
            || $gejala[$i] == 'G29' || $gejala[$i] == 'G30'
            || $gejala[$i] == 'G31' || $gejala[$i] == 'G32'){

                $role['P09'] = $role['P09'] + 1;
              
            }

            //role 10 (P10)
            if($gejala[$i] == 'G33' || $gejala[$i] == 'G36' 
            || $gejala[$i] == 'G35' || $gejala[$i] == 'G34'){

                $role['P10'] = $role['P10'] + 1;
              
            }

            //role 11 (P11)
            if($gejala[$i] == 'G33' || $gejala[$i] == 'G37' 
            || $gejala[$i] == 'G38' || $gejala[$i] == 'G39'
            || $gejala[$i] == 'G35'){

                $role['P11'] = $role['P11'] + 1;
              
            }

            //role 12 (P12)
            if($gejala[$i] == 'G33' || $gejala[$i] == 'G41' 
            || $gejala[$i] == 'G38' || $gejala[$i] == 'G39'
            || $gejala[$i] == 'G40'){

                $role['P12'] = $role['P12'] + 1;
              
            }

            //role 13 (P13)
            if($gejala[$i] == 'G33' || $gejala[$i] == 'G08' 
            || $gejala[$i] == 'G43' || $gejala[$i] == 'G44'
            || $gejala[$i] == 'G42'){

                $role['P12'] = $role['P12'] + 1;
              
            }

            //role 14 (P14)
            if($gejala[$i] == 'G46' || $gejala[$i] == 'G45' 
            || $gejala[$i] == 'G48' || $gejala[$i] == 'G47'){

                $role['P14'] = $role['P14'] + 1;
              
            }

            //role 15 (P15)
            if($gejala[$i] == 'G49' || $gejala[$i] == 'G45' 
            || $gejala[$i] == 'G50' || $gejala[$i] == 'G51'
            || $gejala[$i] == 'G52' || $gejala[$i] == 'G53'
            || $gejala[$i] == 'G54' ){

                $role['P15'] = $role['P15'] + 1;
              
            }

            //role 16 (P16)
            if($gejala[$i] == 'G47' || $gejala[$i] == 'G45' 
            || $gejala[$i] == 'G50' || $gejala[$i] == 'G55'
            || $gejala[$i] == 'G54' || $gejala[$i] == 'G56'){

                $role['P16'] = $role['P16'] + 1;
              
            }

            //role 17 (P17)
            if($gejala[$i] == 'G57' || $gejala[$i] == 'G58' 
            || $gejala[$i] == 'G45' || $gejala[$i] == 'G56'
            || $gejala[$i] == 'G51' || $gejala[$i] == 'G46'
            || $gejala[$i] == 'G50' ){

                $role['P17'] = $role['P17'] + 1;
              
            }

            //role 18 (P18)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G59' 
            || $gejala[$i] == 'G60' || $gejala[$i] == 'G56'
            || $gejala[$i] == 'G61' || $gejala[$i] == 'G62'){

                $role['P18'] = $role['P18'] + 1;
              
            }

            //role 19 (P19)
            if($gejala[$i] == 'G53' || $gejala[$i] == 'G56' 
            || $gejala[$i] == 'G61' || $gejala[$i] == 'G52'
            || $gejala[$i] == 'G63' || $gejala[$i] == 'G62'){

                $role['P19'] = $role['P19'] + 1;
              
            }

            //role 20 (P20)
            if($gejala[$i] == 'G64' || $gejala[$i] == 'G56' 
            || $gejala[$i] == 'G65' || $gejala[$i] == 'G66'
            || $gejala[$i] == 'G01' || $gejala[$i] == 'G60'
            || $gejala[$i] == 'G47' ){

                $role['P20'] = $role['P20'] + 1;
              
            }

            //role 21 (P21)
            if($gejala[$i] == 'G67' || $gejala[$i] == 'G68' 
            || $gejala[$i] == 'G69' || $gejala[$i] == 'G70'
            || $gejala[$i] == 'G71' || $gejala[$i] == 'G47'){

                $role['P21'] = $role['P21'] + 1;
              
            }


        }
        
        $data = $role;
        asort($data);      
        foreach($data as $x => $x_value) {
                $hasil = $x;
        }

          return $hasil;
    }

    public function export($pasien, $penyakit)
    {   

        $data['penyakit'] = Penyakit::where('id', $penyakit)->first();

        $data['gejala']   = DPgejala::with('gejala')->where('kd_penyakit', $data['penyakit']->kd_penyakit)->get();
        $data['pasien']   = Pasien::where('id', $pasien)->first();

        // return $data;
   
        $pdf = PDF::loadView('konsultasi.export', $data)
        ->setPaper('a4','potret')->setWarnings(false)
        ->setOptions(['dpi' => 150,  'isRemoteEnabled' => false]);

        return $pdf->download('hasil-diagnosa.pdf');

    }
  
}
