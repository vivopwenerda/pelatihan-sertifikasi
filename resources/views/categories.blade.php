@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-2">
            <div class="card bg-dark text-white">
                <a href="/portofolio?category={{ $category->slug }}">
                    <img src="https://source.unsplash.com/500x700?{{ $category->name }}"  class="img-fluid rounded-start mt-3;" alt="{{ $category->name }}">
                </a>
                
              </div>
              <div class="btn">
                <a href="/categories/{{ $category->slug }}" class="text-decoration-none btn btn-success mt-2"> {{  $category->name }}</a>
              </div>
        </div>
        @endforeach
    </div>
</div>   

@endsection
