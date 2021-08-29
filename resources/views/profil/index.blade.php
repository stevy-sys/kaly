@extends('layouts.app')

@section('content')

@include('layouts/partials/_header')
 

<div id="profil">
    <div class=" mt-0 p-2"></div>
    <div class="container emp-profile ">
        <form method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-img">
                        <img src="{{isset($user->profil->pdp) ? $user->profil->pdp : '/storage/image/pdp_default.jpg' }}" alt="photo de profil" />
                        <div class="file btn btn-lg btn-primary">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                            <input type="file" name="file" />
                        </div>
                    </div>

                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="#">Website Link</a><br />
                        <a href="#">Bootsnipp Profile</a><br />
                        <a href="#">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="#">Web Designer</a><br />
                        <a href="#">Web Developer</a><br />
                        <a href="#">WordPress</a><br />
                        <a href="#">WooCommerce</a><br />
                        <a href="#">PHP, .Net</a><br />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="profile-head">
                        <h5>{{$user->name}}</h5>
                        <h6>{{isset($user->profil->profession) ? $user->profil->profession : 'profession non definie' }}</h6>
                        <p class="profile-rating">Nombre abonnees : <b>233</b></p>
                        <p>
                            <button class="btn btn-primary"> <a href=""><i class="fa fa-user-plus" aria-hidden="true"></i> Abonnee</a></button>
                            <button class="btn btn-success"><a href=""><i class="fa fa-pencil" aria-hidden="true"></i> Editer</a></button>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="profile-post" data-toggle="tab" href="#post" role="tab"
                                    aria-controls="post" aria-selected="false"><i class="fa fa-comment" aria-hidden="true"></i> Publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true"> <i class="fa fa-user" aria-hidden="true"></i> A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false"><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistique</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>username</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{isset($user->profil->username) ? $user->profil->username : $user->id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{$user->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{isset($user->profil->phone) ?? $user->profil->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{isset($user->profil->profession) ?? $user->profil->profession }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6 col-xs-5">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6 col-xs-5">
                                    <p>{{isset($user->profil->experience) ?? $user->profil->experience}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Natinnalite</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>{{isset($user->profil->nationnalie) ?? $user->profil->nationnalie }}</p>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <p>6 months</p>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <label>Your Bio</label><br />
                                    <p>{{isset($user->profil->biographie) ?? $user->profil->biographie }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="post" role="tabpanel" aria-labelledby="profile-post">
                            post
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection