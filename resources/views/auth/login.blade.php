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
