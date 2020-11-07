@extends('layouts.auth')
@section('title', 'Sign In')

@section('content')
<main>
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-7 bg-image">
          <div class="content-left m-auto">
            <h3>are you ready</h3>
            <h1>for travelling?</h1>
          </div>
        </div>
        <div class="col-md-8 col-lg-5">
          <div class="sign-in d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <img src="/frontend/image/login-logo.png" alt="" />
                  <h3 class="login-heading mb-4">Join to Nomads</h3>
                  <p>
                    this is one step before you start a new journey to
                    <br />
                    travelling with us.
                  </p>
                  <ul class="menu nav nav-pills">
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link active">Sign In</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                    </li>
                  </ul>
                  <div class="line-sign-in" id="active"></div>
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-label-group-email">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus/>
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-label-group-password">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password"/>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input bg-secondary" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                      <label class="custom-control-label" for="remember">Remember password
                      </label>                      
                      @if (Route::has('password.request'))
                      <a class="small float-right forgot" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                @endif
                    </div>
                    <button class="btn btn-block btn-action mb-2" type="submit">
                    {{ __('Sign In') }}
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
