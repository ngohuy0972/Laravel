@extends('layouts.app')

@section('register')
  
  <div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
          <div class="card-body">
            <form method="POST" action="{{route('register') }}">
            @csrf

            <div class="mt-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required class="single-input" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div> 

            <div class="mt-10">
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>  

            <div class="mt-10">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" value="{{ old('password') }}" required autocomplete="new-password" autofocus>

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>  

            <div class="mt-10">
              <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required class="single-input" value="{{ old('password') }}" required autocomplete="new-password" autofocus>

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
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                    <a href="{{route('login')}}"></a>
                </button>
                <a class="btn btn-link-register" href="{{ route('login') }}">
                  {{ __('I have an account') }}
                </a>
              </div>
            </div>         
          </form>  
        </div>
      </div>
    </div>
  </div>      
@endsection

