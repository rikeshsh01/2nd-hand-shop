<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>  -->
@extends('layouts.page')
@section('content')	
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90 p-l-50 p-r-50">
            <form class="login100-form flex-sb flex-w" action="" method="post">
                <span class="login100-form-title">
                <i class="fas fa-user"></i>
                <br>
                <br>
                <b style="color: white;">Contact Us</b>
                </span>

                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="text" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <textarea  class="input100" type="text" placeholder="Message" id="description" name="description" ></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <div class="w-full beforeNone text-center">
                        <input type="submit" class="nv-login-submit login100-form-btn" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div> 


@endsection