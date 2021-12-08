@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 mt-3 text-center fw-normal">Please Login</h1>
      <form action="/login" method="post">
        @csrf 
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required >
          <label for="username">Username</label>
          @error('username') 
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-buttom" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>


@endsection