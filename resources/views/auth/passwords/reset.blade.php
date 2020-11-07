@extends('layouts.auth')

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
          <div class="reset d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <img src="/frontend/image/login-logo.png" alt="" />
                  <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <input type="hidden" name="token" value="{{ $token }}">
                    <div class="title-header">
                      <a href="{{ route('login') }}"><img src="/frontend/image/ic_back.png"></a>
                      <h5>Reset Password</h5>
                    </div>
                    <div class="form-label-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" placeholder="Your Email" required autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="New Password" required autofocus />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password" required autofocus />
                    </div>
                    <button class="btn btn-block btn-action mb-2" type="submit">
                      {{ __('Reset Password') }}
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
