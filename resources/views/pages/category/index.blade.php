@extends('layouts.page')
@section('content')

<section class="product-prev-sec product-list-sec">
    <div class="container">
        <div class="product-rev-wrap">
            <div class="cat-aside">
                <h3 class="text-center">Categories</h3>
                <a href="/categories" class="cat-check border-top-no ">
                    {{-- <img src='public/images/category/category-5f69b6a41e8e2.jpg' alt=""> --}}
                    <p>All Categories</p>
                </a>


                @foreach ($categoryIndex as $t)
                    <div class="cat-aside-wrap">
                        <a href="{{ route('categories', ['post' => $t->title]) }}" class="cat-check border-top-no ">
                            {{-- <img src='public/images/category/category-5f69b6a41e8e2.jpg' alt=""> --}}
                            <p>{{ $t->title }}</p>
                        </a>
                    </div>
                @endforeach
            </div>

            
            <div class="cat-product">
                <div class="cart-pro-head">
                    <h2 class="sec-head">
                        Categories Products
                    </h2>
                </div>

                <div class="row">
                    @foreach ($posts as $t)
                        <div class="col-xl-4 col-md-6 ">
                            <div class="pro-box">
                                <div class="pro-img">
                                    <a href="/singlepage/{{ $t->id }}">
                                        <img src='{{ asset('/uploadimage/' . $t->image) }}' alt="">
                                    </a>
                                </div>
                                <div class="product-details-wrap">
                                    <div class="product-details">
                                        <a href="../product-details/18.html">
                                            <h4>{{ $t->name }}</h4>
                                        </a>
                                        <p class="pro-pricing">Rs:{{ $t->price }}</p>
                                    </div>
                                    <div class="product-details">
                                        <h4>Issue</h4>
                                        <p>{{ $t->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="text-center">
        {{ $posts->links() }}
    </div>
@endsection
