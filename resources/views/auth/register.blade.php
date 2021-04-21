@extends('layouts.page')



@section('content')

<section class="signup-sec">

    <img src='public/assets/images/bc.jpg' class="bg-img" alt="">
    <div class="container">

        <div class="signup-logo">

            <a >

                <p>Register</p>

            </a>

        </div>

        <form action="{{ route('register') }}" method="post">

            {{-- <input type="hidden" name="_token" value="nG9X7P3OIxvKvflDHf8MeGhGPeCkluPhu3ttJ5Wj"> --}}


            @csrf
                <input type="text" name="name" placeholder="Full name" class="w-100 @error('name') is-invalid  @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="text" name="email" placeholder="Email" class="w-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- <input type="text" name="mobile" placeholder="Mobile" class="w-50" value=""> --}}

                <input type="password" name="password" placeholder="Password" class="w-50 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror

                <input type="password" placeholder="Confirm password" class="w-50" name="password_confirmation" required autocomplete="new-password">

                {{-- <input type="text" name="referral_code" placeholder="Referral code (Optional)" class="w-100" value=""> --}}

            
            

            {{-- <label class="accept-check w-100" for="accept">

                <input type="checkbox" name="accept" id="accept" required="">

                <p class="already-p">I accept the<a href="terms.html"> terms & conditions </a></p>

            </label> --}}



            <button class="btn">Signup</button>

            <p class="already0">Already have an account?
                <a href="/login" class="lgn"> Login</a>
            </p>

        </form>

    </div>

</section>
@endsection