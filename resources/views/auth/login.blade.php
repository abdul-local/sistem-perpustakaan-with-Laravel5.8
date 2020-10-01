@extends('frontend/templates/default')

@section('content')
<div class="container">
    <h3>Login</h3>
<form action="{{route('login')}}" class="col s12" method="post">
@csrf
<div class="row">
    
    <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
    <input type="text" name="email" class="@error('email')
        invalid
    @enderror"value="{{old('email')}}" >
    <label for="">Email</label>
    @error('email')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
     @enderror
    </div>
    <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
    <input type="text" name="password" class="@error('password')
        invalid
    @enderror" value="">
    <label for="">Password</label>
    @error('password')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
     @enderror
    </div>
    <div class="input-field col s12">
   <input type="submit" value="Login" class="vawes-effect waves-light btn red accent-1">
    </div>
</div>
</form>
</div>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}