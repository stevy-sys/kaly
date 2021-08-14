@extends('layouts.app')

@section('content')
    @include('layouts.partials._header')
    <div class="container">
        <div class="post-a-comment-area mb-30 clearfix">
            <h4 class="mb-50">Publiez une recette</h4>

            <!-- Reply Form -->
            <div class="contact-form-area">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" id="name" placeholder="Name*">
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