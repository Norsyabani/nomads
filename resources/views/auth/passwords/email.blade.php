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
          <div class="email-reset d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <img src="/frontend/image/login-logo.png" alt="" />
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form method="POST" action="{{ route('password.email') }}">
                  @csrf
                    <div class="title-header">
                      <a href="{{ route('login') }}"><img src="/frontend/image/ic_back.png"></a>
                      <h5>Reset Password</h5>
                    </div>
                    <h4 class="text-center">Your Email</h4>
                    <div class="form-label-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="example@mail.com" required autofocus/>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-block btn-action mb-2" type="submit">
                      {{ __('Send Password Reset Link') }}
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
