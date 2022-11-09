@extends('layouts.template')

@section('css')
<style>
    body{
        background: url('{{ asset("img/background.jpg")   }}') no-repeat;
        background-size: cover;
    }
</style>
@stop

@section('content')
<div id="login-container">
    <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contrasena">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <b>Recordarme</b>
            </div>
            <div class="col-6">
                <a href="#">Olvido su Contrasena?</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn" type="submit">Ingresar</button>
            </div>
        </div>
    </form>
</div>
@endsection
