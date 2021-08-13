@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="row">
            <div class="col-md-4 register-left">
                <img src="/img/image.jpg" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <input type="submit" name="" value="Accueil" /><br />
            </div>
            <div class="mt-3 col-md-8 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-selected="true">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("register") }}" aria-selected="false">Inscription</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Connectez-vous!</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror"" placeholder="email" value="" required autocomplete="email" autofocus />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"" placeholder="password" value="" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btnRegister btn-success" value="Connexion" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection