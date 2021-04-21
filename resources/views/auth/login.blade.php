@extends('layouts.page')


@section('content')

<section class="signup-sec">
    <img src='public/assets/images/bc.jpg' class="bg-img" alt="">
    <div class="container">
        <div class="signup-logo">
            <a>
                <p>Log In</p>
            </a>
        </div>
        <form id="login" action="{{ route('login') }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="_token" value="nG9X7P3OIxvKvflDHf8MeGhGPeCkluPhu3ttJ5Wj">             --}}
            <input type="email" id="email" placeholder="Email" class="w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" name="password" id="password" placeholder="Password" class="w-100 @error('password') is-invalid @enderror"  required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

           
               
                    
            <input class="w-100-a" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
            <span class="form-check-aa" for="remember">{{ __('Remember Me') }}</span>
                  
          

            <button type="submit" class="btn w-100">Login</button>
            <a href="https://accounts.google.com/o/oauth2/auth?client_id=944012867862-cg526en1blav423pc1qbd0s7dlpt75r6.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Ftiffinbatta.com%2Fproject%2Ffood-v4%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=uq6nETQhFjxJ0RwGFArRWoGmgoA7C4pFUlOiEAAM" class="btn w-50 mt-3" style="background-color: #fff;">
                <img src='public/front/images/ic_google.png' alt="">
            </a>
            <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=970149196792518&amp;redirect_uri=https%3A%2F%2Ftiffinbatta.com%2Fproject%2Ffood-v4%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=nZbfRuRUdSBPR2IZ46t5glGPhCTD0imC9RgNtGl9" class="btn w-50 mt-3" style="background-color: #fff;">
                <img src='public/front/images/ic_fb.png' alt="">
            </a>
            
            <p class="already">Don't have an account? <a href="/register">Signup</a></p>
            <p class="already1">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="aaaa">Forgot Password?</a></p>
            @endif
            
        </form>
    </div>
</section>
@endsection
