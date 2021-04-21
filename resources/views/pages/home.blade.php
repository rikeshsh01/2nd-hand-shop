@extends('layouts.page')

@section('content')



<section class="banner-sec">
	<div class="container-fluid px-0">
		<div class="banner-carousel owl-carousel owl-theme">
			<div class="item">
				<img src="{{asset('public/images/slider/ps2.jpg')}}" alt="">
				<div class="banner-contant">
					<h1>2nd Hand Shop</h1>
					<p></p>
				</div>
			</div>
						<div class="item">
				<img src="{{asset('public/images/slider/ps4.jpg')}}" alt="">
				<div class="banner-contant">
					<h1>2nd Hand Buy & Sell</h1>
					<p></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product-prev-sec product-list-sec">
	<div class="container">
		{{-- new post  --}}
		<h2 class="sec-head">New Post</h2>
		<a href="/showmore1" class="btn">Show More</a>
				<div class="row">
                    @foreach ($posts as $t)
                        <div class="col-lg-4 col-md-6">
                            <div class="pro-box">
                                <div class="pro-img">
                                    <a href="/singlepage/{{ $t->id }}">
                                        <img src='{{ asset('/uploadimage/' . $t->image) }}' alt="">
                                    </a>


									@if ($t-> is_liked())
                                            <a href="{{'dislike/'.$t['id']}}" class="i btn btn-danger" >
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        @else                                        
                                            <a href="{{'like_post/'.$t['id']}}" class="i btn btn-success" >
                                                <i class="fal fa-heart"></i>
                                            </a>
                                        @endif
                                </div>
                                <div class="product-details-wrap">
                                    <div class="product-details">
                                        <a href="../product-details/18.html">
                                            <h4>{{ $t->name }}  <br> <b>{{$t->created_at->diffforHumans()}}</b> </h4>
                                        </a>
                                        <p class="pro-pricing">Rs:{{ $t->price }}</p>
                                    </div>
           
                                </div>
                            </div>
                        </div>
                    @endforeach
					

					
                </div>
				<br>
				<hr>
				<br>
{{-- category  --}}
				<h2 class="sec-head">Categories</h2>
				<a href="/categories" class="btn">Show More</a>
				<div class="row">
                    @foreach ($popular as $t)
                        <div class="col-lg-4 col-md-6">
                            <div class="pro-box">
                                <div class="pro-img">
                                    <a href="/singlepage/{{ $t->id }}">
                                        <img src='{{ asset('/uploadimage/' . $t->image) }}' alt="">
                                    </a>
									@if ($t-> is_liked())
                                            <a href="{{'dislike/'.$t['id']}}" class="i btn btn-danger" >
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        @else                                        
                                            <a href="{{'like_post/'.$t['id']}}" class="i btn btn-success" >
                                                <i class="fal fa-heart"></i>
                                            </a>
                                        @endif
                                </div>
                                <div class="product-details-wrap">
                                    <div class="product-details">
                                        <a href="../product-details/18.html">
                                            <h4>{{ $t->name }} <br> <b>{{$t->created_at->diffforHumans()}}</b></h4>
                                        </a>
                                        <p class="pro-pricing">Rs:{{ $t->price }}</p>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    @endforeach
					
                </div>

				<br>
				<hr>
				<br>
{{-- Collection  --}}
				<h2 class="sec-head">Collection</h2>
				<a href="/showmore3" class="btn">Show More</a>

				<div class="row">
                    @foreach ($feature as $t)
                        <div class="col-lg-4 col-md-6">
                            <div class="pro-box">
                                <div class="pro-img">
                                    <a href="/singlepage/{{ $t->id }}">
                                        <img src='{{ asset('/uploadimage/' . $t->image) }}' alt="">
                                    </a>
                                    @if ($t-> is_liked())
                                    <a href="{{'dislike/'.$t['id']}}" class="i btn btn-danger" >
                                        <i class="fas fa-heart"></i>
                                    </a>
                                @else                                        
                                    <a href="{{'like_post/'.$t['id']}}" class="i btn btn-success" >
                                        <i class="fal fa-heart"></i>
                                    </a>
                                @endif

                                </div>
                                <div class="product-details-wrap">
                                    <div class="product-details">
                                        <a href="../product-details/18.html">
                                            <h4>{{ $t->name }} <br> <b>{{$t->created_at->diffforHumans()}}</b></h4>
                                        </a>
                                        <p class="pro-pricing">Rs:{{ $t->price }}</p>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    @endforeach

					
                </div>
    </div>
</section>

<section class="review-sec">
    <div class="container">
        <h2 class="sec-head">Team Member</h2>
        <div class="review-carousel owl-carousel owl-theme">
            
                <div class="item">
                    <div class="review-profile">
                        <img src='{{asset('public/images/New folder/ricky.jpg')}}' alt="">
                    </div>
                    <h3>Rikesh Shakya</h3>
                    <p>Web Developer & Frontend Designer</p>
                </div>

                <div class="item">
                    <div class="review-profile">
                        <img src='{{asset('public/images/New folder/dp.jpg')}}' alt="">
                    </div>
                    <h3>Deepak Shresth</h3>
                    <p>Frontend Designer</p>
                </div>

                <div class="item">
                    <div class="review-profile">
                        <img src='{{asset('public/images/New folder/man.jpg')}}' alt="">
                    </div>
                    <h3>Manish Adhikari</h3>
                    <p>Full Stack Web Developer</p>
                </div>
            
        </div>

    </div>
</section>

@endsection

