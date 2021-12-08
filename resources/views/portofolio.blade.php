@extends('layouts.main')

@section('container')
    <h1 class="mb-3 mt-3">
        {{ $title }}</h1>


  <div class="row mb-3">
    <div class="col-md-12">
      <form action="/portofolio">

        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif

        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif

        <div class="input-group mb-3">
          <input type="text" class="form-control text-center" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-secondary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

        @if ($portofolio->count())
        <div class="card mb-3 " style="max-width: 90rem;">
            <div class="row g-0">
              <div class="col-md-3 mt-2 mb-2 ml-2">
                <img src="https://source.unsplash.com/500x400?{{ $portofolio[0]->category->name }}"  class="img-fluid rounded-start mt-3;" alt="{{ $portofolio[0]->title }}">
              </div>
              <div class="col-md-9" style="max-hight: 30rem;">
                <div class="card-body">
                  <a href="/portofolio/{{ $portofolio[0]->slug }}">
                    <h3 class="card-title text-decoration-none text-dark">{{ $portofolio[0]->title }}</h3>
                  </a>
                  
                  <small class="text-muted"> 
                    By. <a href="/portofolio?author={{ $portofolio[0]->author->username }}" class="text-decoration-none">{{ $portofolio[0]->author->name }}</a> 
                    {{ $portofolio[0]->created_at->diffForHumans() }} <br>
                    <a href="/portofolio?category={{ $portofolio[0]->category->slug }}" class="text-decoration-none btn btn-success mt-2 btn-sm"> {{  $portofolio[0]->category->name }}</a>
                                     
                  </small>
                  
                  <p class="card-text mt-3">{{ $portofolio[0]->excerpt }}</p>
    
                  <p class="card-text"> <small>{{ $portofolio[0]->dateporto }}</small> </p>

                  <a href="portofolio/{{ $portofolio[0]->slug }}" class="text-decoration-none btn btn-dark ">Read more</a>

                </div>
              </div>
            </div>
          </div>
          

        
    <div class="container">
        <div class="row">
            @foreach ($portofolio->skip(1) as $post)
            <div class="col-md-3 mb-3">
                <div class="card ">
                    <img src="https://source.unsplash.com/300x200?{{ $post->category->name }}" class="img-fluid card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <a href="/portofolio/{{ $post->slug }}">
                            <h5 class="card-title text-decoration-none text-dark">{{ $post->title }}</h5>
                          </a>

                    <small class="text-muted"> 
                        By. <a href="/portofolio?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} <br>
                        <a href="/portofolio?category={{ $post->category->slug }}" class="text-decoration-none btn btn-success mt-2 btn-sm"> {{  $post->category->name }}</a>
                                        
                    </small>

                    <p class="card-text ">{{ $post->excerpt }}</p>
                    <a href="portofolio/{{ $post->slug }}" class="text-decoration-none btn btn-dark btn-end ">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>  

    @else
          <p class="text-center fx-4">No post found.</p>
        @endif

@endsection
