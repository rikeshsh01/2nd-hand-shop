<!DOCTYPE html>
<html>
<head>
	<title>2nd Hand Buy & Sell</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- font-awsome css  -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/font-awsome.css')}}">



	<!-- fonts css -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/fonts/fonts.css')}}">



	<!-- bootstrap css -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/bootstrap.min.css')}}">



	<!-- fancybox css -->

	<link rel="stylesheet" href="{{asset('public/dist/jquery.fancybox.min.css')}}" />



	<!-- owl.carousel css -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/owl.carousel.min.css')}}">



	<link href="{{asset('public/assets/plugins/sweetalert/css/sweetalert.css" rel="stylesheet')}}">

	<!-- style css  -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/style.css')}}">



	<!-- responsive css  -->

	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/responsive.css')}}">

<!--later added css-->

<style>
    .navbar-brand {
    display: block;
     max-width: 150px !important; 
    padding: 0;
    margin: 0;
}
</style>
</head>
<body>
			<!--*******************

	    Preloader start

	********************-->

	<div id="preloader" style="display: none;">

	    <div class="loader">

	        <img src="{{asset('public/front/images/loader.gif')}}">

	    </div>

	</div>

	<!--*******************

	    Preloader end

	********************-->
	



	<!-- navbar -->

	<header>

		<nav class="navbar navbar-expand-lg">

			<div class="container">

				<a class="navbar-brand" href="/">
					<img src='{{asset('public/images/about/logo-6030f93f7573e.png')}}' alt=""></a> 
					{{-- 150 X 46mm --}}
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

					<div class="menu-icon">

						<div class="bar1"></div>

						<div class="bar2"></div>

						<div class="bar3"></div>

					</div>

				</button>
                
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                   
					<ul class="navbar-nav">
                        
						<li class="nav-item active">

							<a class="nav-link" href="/index">Home</a>

						</li>
                        <li class="nav-item ">

							<a class="nav-link" href="/categories">Categories</a>

						</li>
					
		

						 <li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="true">
							Uploads
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="nav-link dropdown" href="/myupload">My Uploads</a>
							
							<div class="dropdown-divider"></div>
							<a class="nav-link dropdown" href="/newupload">New Upload</a>
							
							</div>
						</li>

						<li class="nav-item ">

							<a class="nav-link" href="/about">About</a>

						</li>

						 
                         <li class="nav-item search">

								<form method="get" action="{{url('search')}}">

									<div class="search-input">

										<input type="search" name="search" placeholder="Search here" required="">

									</div>

									<button type="submit" class="nav-link"><i class="far fa-search"></i></button>

								</form>

							</li>
							

							<li class="nav-item cart-btn">

								<a class="nav-link" href="{{url('wish_list')}}"><i class="fas fa-heart-square fa-2x"></i></a>

							</li>
							{{-- <li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-bell"><span class="badge"></span></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									@forelse ($user->notifications as $item)
										<a href="" class="dropdown-item">{{$item->data['name']}}</a>
									@empty
									<a href="" class="dropdown-item">No record Found</a>
									@endforelse
								</div>
					
							</li> --}}

							@guest
							@if (Route::has('login'))

							<li class="nav-item">

								<a class="nav-link btn sign-btn" href="{{ route('login') }}">Login</a>

							</li>
							
							@endif
							
							{{-- @if (Route::has('register'))
							<li class="nav-item">

								<a class="nav-link btn sign-btn" href="{{ route('register') }}"></a>

							</li>
								
							@endif --}}
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>
				
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="nav-link dropdown" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
				
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
						@endguest
						 

							
					</ul>

				</div>

			</div>

		</nav>

	</header>




		@yield('content')
		<br>
		<hr>



<footer>

	<div class="container d-flex justify-content-between flex-wrap">

		<div class="footer-head">

			<div class="footer-logo"><img src="{{asset('public/images/about/logo.png')}}" alt=""></div>

			<p>This is our first commercial laravel project, that was made by our team Rikesh, Manish $Deepak, Named as 2nd Hand Buy & Sell</p>

		</div>

		<div class="footer-socialmedia">

			
				<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>

			


			
				<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>

			


			
				<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>

			
		</div>

		<div class="download-app">

			<p>Download the App</p>

			<div class="download-app-wrap">

				
					<div class="download-app-icon">

						<a href="https://www.apple.com/in/itunes/" target="_blank"><img src="{{asset('public/front/images/apple-store.svg')}}" alt=""></a>

					</div>

				


				
					<div class="download-app-icon">

						<a href="https://play.google.com/store/apps" target="_blank"><img src="{{asset('public/front/images/play-store.png')}}" alt=""></a>

					</div>

				
			</div>

		</div>

	</div>

	<div class="copy-right text-center">

		<a href="/privacy" style="color: #fff;"> Privacy Policy </a>

		<p>Copyright 2nd Hand Buy& Sell © 2021.All Rights Reserved. <br> Designed &amp; Developed by <a href="/" target="_blank" style="color: #000;"><b>MDR Software</b>.</a></p>

	</div>

</footer>


</body>
<script>
        setTimeout(function(){
            $('#alert').slideUp();
        },5000);
</script>

<!-- jquery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <script src="{{asset('public/dist/jquery.fancybox.min.js')}}"></script> --}}



<!-- bootstrap js -->

<script src="{{asset('public/front/js/bootstrap.bundle.js')}}"></script>



<!-- owl.carousel js -->

<script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>



<!-- lazyload js -->

<script src="{{asset('public/front/js/lazyload.js')}}"></script>



<!-- custom js -->

<script src="{{asset('public/front/js/custom.js')}}"></script>



<script src="{{asset('public/dist/jquery.fancybox.min.js')}}"></script>



<script src="{{asset('public/assets/plugins/sweetalert/js/sweetalert.min.js')}}"></script>

<script src="{{asset('public/assets/plugins/sweetalert/js/sweetalert.init.js')}}"></script>


</html>

