@extends('layouts.auth')
@section('title', 'Sign Up')

@section('content')
<main>
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-7 bg-image">
          <div class="content-left m-auto">
            <h3>Are you ready</h3>
            <h1>for travelling?</h1>
          </div>
        </div>
        <div class="col-md-8 col-lg-5">
          <div class="sign-up d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <img src="/frontend/image/login-logo.png" alt="" />
                  <ul class="menu nav nav-pills">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Sign In</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link active">Sign Up</a>
                      </li>
                  </ul>
                  <div class="line-sign-up"></div>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-label-group">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Full Name" required autofocus />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" placeholder="Username" required />
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" required autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password" required />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder=" Confirm Password" required />
                    </div>
                    <button class="btn btn-block btn-action mb-2" type="submit">
                        {{ __('Sign Up') }}
                    </button>
                    <div class="footer">© Nomads 2020</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
