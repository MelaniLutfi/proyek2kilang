@extends('layouts.main')

@section('title' , 'Diagnosa' , 'active')

@section('container')

<style>
    .judul{
        height: 25vh;
    }

    .judul .container{
        border-bottom: 2px solid #000;
        height: 25vh;
        padding-top: 15vh;
    }

    .form{
        height: 100%;
        padding-bottom: 70px;
    }

    li{
        line-height: 30px;
    }
</style>

<section class="judul mt-5">
    <div class="container">
        <h2>Diagnosa</h2>
    </div>
</section>

<section class="form mt-5">
    <div class="container">
        
        <div class="navbar">
            <div class="kolom" style="width:70%; height:100%;">
                <div style="border-bottom:1px solid #414141;">
                    <p style="
                    width: 1045px;
                    height: 60px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 30px;
                    line-height: 60px;
                    
                    letter-spacing: -0.005em;
                    
                    color: #000000;">Hasil diagnosa anda menunjukan</p>
                    <p style="
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 30px;
                    /* or 200% */
                    
                    letter-spacing: -0.015em;
                    
                    color: rgba(0, 79, 136, 0.8); padding-bottom:10px;"> Berdasarkan keluhan yang telah anda masukan pada halaman sebelumnya melalui kuisioner sistem , maka diperoleh hasil.
                                                                            Penyakit <b style="color: rgba(0, 47, 81, 0.8);">“&nbsp;{{ $penyakit->nama_penyakit }}&nbsp;”</b> dengan tingkat keseriusan “....%”</p>
                </div>
                <div style="border-bottom:1px solid #D0D0D0;">
                    <p style="
                    width: 329px;
                    height: 72px;
                    font-style: normal;
                    font-weight: 500;
                    font-size: 24px;
                    line-height: 72px;
                    letter-spacing: -0.015em;

                    color: #000000;">Profil Pasien</p>

                    <table>
                        <tr style="line-height: 30px;">
                            <td width="150px">Nama</td>
                            <td width="30px">:</td>
                            <td>{{$pasien->nama}}</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td width="150px">Tanggal Lahir</td>
                            <td width="30px">:</td>
                            <td>{{$pasien->tanggal_lahir}}</td>
                        </tr>
                        <tr  style="line-height: 30px;">
                            <td width="150px">E-mail</td>
                            <td width="30px">:</td>
                            <td>{{$pasien->email}}</td>
                        </tr>
                        <tr  style="line-height: 30px;">
                            <td width="150px">No Telpon</td>
                            <td width="30px">:</td>
                            <td>{{$pasien->no_telp}}</td>
                        </tr>
                        <tr  style="line-height: 30px;">
                            <td width="150px">Jenis Kelamin</td>
                            <td width="30px">:</>
                            <td>{{$pasien->jenis_kelamin}}</td>
                        </tr>
                        <tr  style="line-height: 30px;">
                            <td width="150px">Tanggal Diagnosa</td>
                            <td width="30px">:</td>
                            <td>{{$konsultasi->tanggal_konsultasi}}</td>
                        </tr>
                    </table>
                    <br>

                </div>
                <div style="border-bottom:1px solid #D0D0D0;">
                    <p style="
                    width: 329px;
                    height: 72px;
                    font-style: normal;
                    font-weight: 500;
                    font-size: 24px;
                    line-height: 72px;
                    letter-spacing: -0.015em;

                    color: #000000;">Gejala yang dirasakan</p>

                    <ul>
                        @foreach ($gejala as $item)
                        <li>{{ $item->gejala['nama_gejala'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p style="
                    width: 329px;
                    height: 72px;
                    font-style: normal;
                    font-weight: 500;
                    font-size: 24px;
                    line-height: 72px;
                    letter-spacing: -0.015em;

                    color: #000000;">Detail Penyakit</p>

                    <div class="detail">
                        <table>
                            <tr style="line-height: 30px;">
                                <td width="200px" align="top">Deskripsi Penyakit</td>
                                <td width="30px">:</td>
                                <td>{{$penyakit->deskripsi}}</td>
                            </tr>
                            <tr style="line-height: 30px;">
                                <td width="200px">Penyebab</td>
                                <td width="30px">:</td>
                                <td>
                                    @foreach ($penyebab as $item)
                                        <li>{{ $item->penyebab['nama_penyebab'] }}</li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr style="line-height: 30px;">
                                <td width="200px">Solusi</td>
                                <td width="30px">:</td>
                                <td>
                                    @foreach ($solusi as $item)
                                        <li>{{ $item->solusi['naam_solusi'] }}</li>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                        {{-- <div class="label" style="width: 20%; float: left; margin-top:6px;">
                            <p style="color: #000;">Definisi Penyakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </div>
                        <div class="isi" style="width: 80%; float: left;">
                            <p style="color: #000; line-height:23px; text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="label" style="width: 20%; float: left; margin-top:6px;">
                            <p style="color: #000;">Penyebab Penyakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </div>
                        <div class="isi" style="width: 80%; float: left;">
                            <p style="color: #000; line-height:23px; text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="label" style="width: 20%; float: left; margin-top:6px;">
                            <p style="color: #000;">Solusi Penyakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                        </div>
                        <div class="isi" style="width: 80%; float: left;">
                            <p style="color: #000; line-height:23px; text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        </div> --}}
                    </div><br>
                    <div class="opsi">
                        <a href="/konsultasi" class="btn btn-primary">Diagnosa lagi</a>
                        <a href="/" class="btn btn-info">Selesai</a>
                        <a href="" class="btn btn-warning">Cetak Hasil</a>
                    </div>

                </div>
            </div>

            <div class="kolom" style="width:30%; height:100%;">
                <center><img src="../img/Monitorwithcardiogramtubes.png" alt="" width="350px;"></center>
            </div>
        </div>
    </div>
</section>


@endsection