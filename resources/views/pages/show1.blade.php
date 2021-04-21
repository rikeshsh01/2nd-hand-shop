
@extends('layouts.page')
@section('content')

<div class="container">
  {{-- new post  --}}
  <h2 class="sec-head">New Post</h2>
    <div class="row">
      @foreach ($smr as $t)
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
                              <h4>{{ $t->name }}</h4>
                          </a>
                          <p class="pro-pricing">Rs:{{ $t->price }}</p>
                      </div>
                                  
              
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection