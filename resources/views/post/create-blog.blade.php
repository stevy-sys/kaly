@extends('layouts.app')

@section('content')
    <div class="menu-fixed">
        <div class="menu-abs">
            @include('layouts/partials/_header')
        </div>
    </div>
    <div class="push-top"></div>
    <div class="container">
        <div class="post-a-comment-area mb-30 clearfix">
            <h4 class="mb-50">Publiez une article</h4>
            <!-- Reply Form -->
            <div class="contact-form-area">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" id="name" placeholder="Name*">
                        </div>
                        <div class="col-12 col-lg-6" >
                            <select name="categorie" id="categorie" class="form-control">
                                <option value="categorie 1">categorie 1</option>
                                <option value="categorie 2">categorie 2</option>
                                <option value="categorie 3">categorie 3</option>
                                <option value="categorie 4">categorie 4</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn bueno-btn mt-30" type="submit">Publiez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection