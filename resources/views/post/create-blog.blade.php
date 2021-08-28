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
                <form action="{{ route('post.store-blog') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" name="title" placeholder="titre de l'article">
                        </div>
                        <div class="col-12 col-lg-6" >
                            <select name="categorie_blog_id" id="categorie" class="form-control">
                                @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                        </div>
                        {{-- <div class="col-12">
                            <input type="file" class="form-control" name="image">
                        </div> --}}
                        <div class="col-12">
                            <button class="btn bueno-btn mt-30" type="submit">Publiez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection