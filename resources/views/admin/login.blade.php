@extends('layouts.mainlogin')

@section('container')

<style>

    @import url("http://fonts.googleapis.com/css?family=Inter:wght@300;600&display=swap");


    *{
        box-sizing: border-box;
    }

    .masuk{
        padding: 0;
        margin: 0;
        font-family: "Inter", sans-serif;
        background: linear-gradient(45deg, #b5179e , #4895ef);
        padding: 40px;

    }

    .form-masuk{
        min-height: calc(100vh - 40px * 2);
        display: grid;
        grid-template-columns: 50% 50%;
        border-radius: 10px;
        overflow: hidden;
        
    }

    .login-left{
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 170px;
        background-color: white;
        
    }

    .login-right{
        background: #f9f9f9;
        display: flex;
        flex-direction: column;
        justify-content: center;
        
    }

    .login-header{
        margin-bottom: 50px;
        font-size: 100px;
    }

    .login-form{
        width: 450px;
    }

    .login-form-content {
            display: flex;
            flex-direction: column;
            gap:35px;
        }

    input[type='email'],
    input[type='password']{
        border: 1px solid;
        height: 50px;
        padding: 0 2rem;
        width: 100%;
        outline: none;
        transition: background .5s;
        font-size: 18px;
        border-radius: 100px;
        padding-top:5px; 
    }

    button{
        border:none;
        background: linear-gradient(45deg,#b5179e,#4895ef);
        color: white;
        padding: 1rem;
        border-radius: 100px;
    }

    .form-item label{
        display: inline-block;
        background-color: white;
        margin-bottom: 10px;
        position: absolute;
        padding: 0 10px;
        transform: translate(20px, -10px);
        font-size: 14px;
    }

    @media(max-width:1350px){

        .login-left{
            padding: 50px !important;
        }

        .login-form{
            width: 100%;
        }

    }

    @media(max-width:768px){
        .masuk{
            padding: 20px;
        }

        .container-fluid{
            grid-template-columns: auto;
        }

        .login-right{
            display: none;
        }

        .form-masuk{
        min-height: calc(104vh - 40px * 2);
        display: grid;
        grid-template-columns: 100%;
        border-radius: 10px;
        overflow: hidden;
        
        }
        
    }

</style>

<section class="masuk">
    <div class="container-fluid">
        <div class="form-masuk">
            <div class="login-left">
                <div class="login-header">
                    <h1><b>Logi Admin</b></h1>
                </div>
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    <div class="login-form-content">
                        <div class="form-item">
                            <label for="username">Masukan Username</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-item">
                            <label for="password">Masukan Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button type="submit">Sign-in</button>
                    </div>
                </form>
            </div>

            <div class="login-right">
                <img src="img/4950249_19836.jpg" alt="">
            </div>
        </div>
    </div>
</section>
@endsection