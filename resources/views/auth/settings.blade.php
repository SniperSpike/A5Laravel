@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex justify-content-center">
      <div class="col-md-3">
          <div class="loginForm">
              <form method="POST" action="{{ url('settings/update') }}">
                  @csrf

                  <h2>Accountinstellingen</h2>
                  <div class="mb-3">
                    <label for="text" class="col-form-label">{{ __('Gebruikersnaam') }}</label>

                    <div class="">
                        <input id="username" type="text" placeholder="{{ Auth::user()->name }}" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->name }}" required autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                  <div class="mb-3">
                      <label for="email" class="col-form-label">{{ __('E-mail') }}</label>

                      <div class="">
                          <input id="email" type="email" placeholder="{{ Auth::user()->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <input type="submit" class="btn btn-RegisterForm" value="{{ __('Aanpassen') }}"/>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection