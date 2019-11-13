@extends('layouts.app')

@section('login')

  <div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
          <div class="card-body">
            <form method="POST" action="{{route('login') }}">
            @csrf

            <div class="mt-10">
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>   

            <div class="mt-10">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" value="{{ old('password') }}" required autocomplete="current-password" autofocus>

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>   
            <div class="mt-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="mt-10">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>
                <a class="btn btn-link-login" href="{{ route('register') }}">
                  {{ __('I do not have account') }}
                </a>
                
                @if (Route::has('password.request'))
                  <a class="btn btn-link-reset-password" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
            </div>         
          </form>  
        </div>
      </div>
    </div>
  </div>      
@endsection
