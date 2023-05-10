@extends('layouts.main')

@section('title' , 'Diagnosa | datadiri' , 'active')

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
</style>

<section class="judul mt-5">
    <div class="container">
        <h2>Diagnosa</h2>
    </div>
</section>

<section class="form mt-5">
    <div class="container">
        <div class="navbar">
            <div class="kolom" width:35%; height:100%;">
                <img src="../img/Monitorwithcardiogramtubes.png" alt="" width="450px;">
            </div>
            <div class="kolom" style="width:65%; height:100%; padding-left:60px;">
                <div>
                    <p style="
                    width: 187px;
                    height: 60px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 35px;
                    line-height: 60px;
                    
                    letter-spacing: -0.005em;
                    
                    color: #000000;">Data Diri</p>
                    <p style="
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 30px;
                    /* or 200% */
                    
                    letter-spacing: -0.015em;
                    
                    color: rgba(0, 79, 136, 0.8); padding-bottom:10px;"> Untuk pasien yang ingin melakukan konsultasi masalah keluhan yang dialami, 
                        Terlebih dahulu melakukan pengisian data yang telah diminta, isi data sesuai prosedur 
                        dan keterangan yang ada</p>
                </div>
                <div class="container">
                    <div class="row justify-content-left">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('konsultasi.store' )}}" name="input">
                                        @csrf
                
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-3 col-form-label">{{ __('Nama') }}</label>
                
                                            <div class="col-md-8">
                            
                                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autofocus>
                
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-3 col-form-label">{{ __('Tanggal Lahir') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir">
                
                                                @error('tanggal_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-3 col-form-label">{{ __('Email') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-3 col-form-label">{{ __('No-handphone') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp">
                
                                                @error('no_telp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-3 col-form-label">{{ __('Jenis kelamin') }}</label>
                
                                            <div class="col-md-8">
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                    <option value="">Pilih jenis kelamin</option>
                                                    <option value="L">L</option>
                                                    <option value="P">P</option>
                                                  </select>   
                                            </div>
                                        </div>
                
                                        <div class="row mb-0" style="padding-top: 10px;">
                                            <div class="col-md-6">
                                                <a href=""><button type="submit" class="btn btn-primary" >
                                                    {{ __('Kirim dan Lanjutkan Konsultasi') }}
                                                </button></a> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</section>


@endsection