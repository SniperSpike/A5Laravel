@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex justify-content-center">
      <div class="col-md-3">
          <div class="loginForm">
              <form method="POST" action="{{ route('settings') }}">
                  @csrf

                  <h2>Accountinstellingen</h2>
                  <div class="mb-3">
                    <label for="text" class="col-form-label">{{ __('Gebruikersnaam') }}</label>

                    <div class="">
                        <input id="email" type="email" placeholder="{{ Auth::user()->name }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                  <div class="mb-3">
                      <label for="email" class="col-form-label">{{ __('E-mail') }}</label>

                      <div class="">
                          <input id="email" type="email" placeholder="{{ Auth::user()->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="mb-3">
                      <label for="password" class="col-form-label">{{ __('Wachtwoord') }}</label>
                      <div class="">
                          <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                      </div>
                  </div>
              </form>
              <a href="{{ route('settings') }}">
                  <button class="btn btn-RegisterForm">
                      {{ __('Aanpassen') }}
                  </button>    
              </a>
          </div>
      </div>
  </div>
</div>

@endsection