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
</style>

<section class="judul mt-5">
    <div class="container">
        <h2>Diagnosa</h2>
    </div>
</section>

<section class="form mt-2">
    <div class="container">
        <div class="navbar">
            <div class="kolom"style="width:35%; height:100%;">
                <center><img src="../img/Phonewithonlinemedicineservicepillsandstethoscope.png" alt="" width="300px;"></center>
            </div>

            <div class="kolom" style="width:65%; height:100%; padding-left:60px;">
                <div>
                    <p style="
                    width: 400px;
                    height: 72px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 35px;
                    line-height: 72px;
                    
                    letter-spacing: -0.005em;
                    
                    color: #000000;">Apa Keluhan Anda ?</p>
                    <p style="
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    /* or 200% */
                    
                    letter-spacing: -0.015em;
                    
                    color: rgba(0, 79, 136, 0.8); padding-bottom:10px;">{{session()->get('nama')}}, Silahkan “Centang” daftar gejala gejala yang telah disiapkan mengenai keluhan penyakit yang anda alami.</p>
                </div>
                <div class="container">
                    <div class="row justify-content-left">
                                <div class="card-body">
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="row mb-3">
                                            @foreach($datagejala as $dg)
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <div>
                                                            
                                                            <input type="checkbox" name="gejala[]" value="{{ $dg->kode_gejala }}">
                                                        <label for="checkbox1" class="form-check-label ">&nbsp;{{ $dg->nama_gejala }}</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                            @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
{{--                 
                                        <div class="row mb-3">
                                            <label for="name">{{ __('Nama') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="name" type="checkbox" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="height: 12px; width:12x;">
                                                <label for="name">{{ __('Nama') }}</label>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-3 col-form-label">{{ __('Tanggal Lahir') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-3 col-form-label">{{ __('Email') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
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
                                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-3 col-form-label">{{ __('Jenis kelamin') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div> --}}
                
                                        <div class="row mb-0" style="padding-top: 10px;">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Diagnosa') }}
                                                </button>
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