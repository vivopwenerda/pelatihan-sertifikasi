@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <article>
                <h2>{{ $post->title }}</h2>                
                <img src="https://source.unsplash.com/3000x500?{{ $post->category->name }}" class="img-fluid card-img-top mb-2" alt="{{ $post->title }}">
                By. <a href="/portofolio?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                {{ $post->created_at->diffForHumans() }} <br>
                <a href="/portofolio?category={{ $post->category->slug }}" class="text-decoration-none btn btn-success mt-2 btn-sm">{{  $post->category->name }}</a>

                <p class="mt-1">Location: {{ $post->place }}</p>
                <p>Date: {{ $post->dateporto }}</p>
                Description: {!! $post->desc !!}
            </article>
            <a href="/portofolio" class="text-decoration-none btn btn-dark ">Back to Portofolio</a><br><br>
        </div>
    </div>
</div>

@endsection