@extends('layouts.auth')

@section('form-login')

<div class="login-box login-card-body" style='width:700px;border-radius:5px'>
    <div class="login-logo">
        <a href="#"><b>
            <img src='{{ asset('img/logotype.png') }}' width='200'>
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card" style='background-color: #005C94'>
        <div class="card-body login-card-body" style=''>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3 input-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value='{{ old('email') }}' required autofocus name='email' placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3 input-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" value='{{ old('password') }}' required placeholder="Mot de passe" name='password'>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <button type="submit" class="btn btn-block" style='background-color:#E84A20;color:#fff'><i class="fas fa-sign-in-alt"></i> SE CONNECTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
