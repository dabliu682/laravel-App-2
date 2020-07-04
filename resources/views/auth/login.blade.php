@extends('layout')
@section('title', 'Dabliu.inc | Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="display-4">Login</h2>
                <div class="form-group">
                    <label for="email" >{{ __('Correo Electronico') }}</label>
                    <input id="email" type="email" class="form-control bg-light shadow-sm border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control bg-light shadow-sm border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('inicio') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
