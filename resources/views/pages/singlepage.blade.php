@extends('layouts.page')

@section('content')

<section class="product-details-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="product-details-img owl-carousel owl-theme">

                    
                    <div class="item">

                        <a data-fancybox="gallery" href="{{asset('/uploadimage/'.$posts->image)}}">

                            <img src="{{asset('/uploadimage/'.$posts->image)}}" alt="">
                        </a>
            

                    </div>

                    
                </div>

            </div>

            <div class="col-lg-7 pro-details-display">

                <div class="pro-details-name-wrap">
                    <h4 class="sec-head">Description</h4>
                    

                    <input type="hidden" name="price" id="price" value="10">
                    
                </div>
                <p>{{$posts->details}}</p>
                <h4>Posted about: <i>{{$posts->created_at->diffforHumans() }}</i> </h4>
                   {{-- <h4> <i>{{$posts->created_at->diffforHumans() }}</i> </h4>  --}}
                


                <div class="extra-food-wrap">
                    <div class="pro-details-add-wrap">
                        <p class="pricing">Price : Rs {{$posts->price}} only</p>                            
                        @if ($posts-> is_liked())
                            <a href="{{url('dislike/'.$posts['id'])}}" class="i btn btn-danger" >
                                Remove From Wishlist
                            </a>
                        @else                                        
                            <a href="{{url('like_post/'.$posts['id'])}}" class="i btn btn-success" >
                                Add To Wishlist
                            </a>
                        @endif
                    </div>
                </div>

            </div>

            <div class="sec-head" style="margin-left: 20px">
                <h4>{{$posts->name}}</h4>
            </div>


            <div class="container container-comment">
                <h1>Comments</h1>    
                
            
               <div class="pro-box-comment">
                <div class="">
                    @foreach($comments as $c)
                        <div class ="card">
            
                            <div class = "card">
                                <h5 class="font-weight-bold fontblack"> {{$c->user->name}} :-</h5>
                                <h5 class="">
                                    <?php
                                    {{
                                        $str=$c->comment;
                                        echo wordwrap($str,70,TRUE);
                                    }}
                                    ?>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <table>
                    <form method="POST" action="{{ url('/commentpost') }}" enctype="multipart/form-data">
                        @csrf
            
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            
                        <input id="name" type="hidden" class="form-control" name="post_id" value="{{$posts->id}}">
                        <input id="name" type="hidden" class="form-control" name="user_id" value="{{Auth()->user()->id}}" >
                        </div>
            
                        <div class="container form-group row">
                            
                            <div class="col" style="overflow: hidden">
                                <input style="float: left" id="name" type="text" class="form-control" name="comment" value="" required autocomplete="comment" autofocus placeholder="Comment here!">
                                <button style=""  type="submit" class="btn btn-primary">
                                    {{ __('comment') }}
                                </button>
                            </div>
                            
                        </div>
                    
                    </form>
                </table> 
               </div>
            </div>

            <br>
            <br>
            <br>

            {{-- <div class="col-12">

                <h2 class="sec-head text-center">Related Products
                    
                </h2>

                <div class="pro-ref-carousel owl-carousel owl-theme">

                    
                    <div class="item">

                        <div class="pro-box">

                            <div class="pro-img">

                                <a href="product-details.html">

                                    <img src='public/images/item/item-5ef31e0a3e8e2.jpg' alt="">

                                </a>

                                
                                    <a href="signin.html"><i class="fal fa-heart i"></i></a>

                                
                            </div>

                            <div class="product-details-wrap">

                                <div class="product-details">

                                    <a href="product-details.html">

                                        <h4>Crispy Spinach &amp; Baby - Corn</h4>

                                    </a>

                                    <p class="pro-pricing">$30.00</p>

                                </div>

                                <div class="product-details">
                                    <p>{{$posts->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>

</section>
@endsection