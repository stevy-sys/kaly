@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="row">
            <div class="col-md-4 register-left">
                <img src="/img/image.jpg" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <a class="btn btn-danger" href="{{ route('accueil') }}">Retour accueil</a>
            </div>
            <div class="mt-3 col-md-8 register-right">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("login") }}">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inscription</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <h3 class="register-heading">Inscrivez-vous</h3>
                        <div class="row register-form">
                            <div class="col-md-12 align-right">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom" />
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}"  required autocomplete="email" placeholder="email" />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror " placeholder="Password " required autocomplete="new-password" />
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password *" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btnRegister btn-secondary" value="Inscription" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection