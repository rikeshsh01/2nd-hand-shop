@extends('layouts.page')
@section('content')	



<section class="signup-sec">

    <img src="{{asset('public/assets/images/bc.jpg')}}" class="bg-img" alt="">
    <div class="container">

        <div class="signup-logo">

            <a>

                <p>New Upload</p>

            </a>

        </div>

        <form method="POST" action="{{ url('uploadpost') }}" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="name" class=""></label>

                <div class="">
                    <input id="name" type="text" class="w-100" name="name" value=""  autofocus placeholder="Product name">

                    
                </div>
            </div>

            <div class="">
                <label for="details" class=""></label>

                <div class="">
                    <input id="name" type="text" class="w-100" name="details" value="" autofocus placeholder="Details of the product">

                    
                </div>
            </div>

            <div class="">
                <label for="description" class=""></label>

                <div class="">
                    <input id="name" type="text" class="w-100" name="description" value=""  autofocus placeholder="Issues of product">

                    
                </div>
            </div>

            <div class="">
                <label for="price" class=""></label>

                <div class="">
                    <input id="name" type="number" class="w-100" name="price" value=""  autofocus placeholder="Selling price">

                    
                </div>
            </div>

            <div class="w-100">
                

                <div class="w-100" >
                    <select name="categories" id="categories" >
                        <option value="">Select Category</option>
                        @foreach($cat as $t)
                        <option >
                        {{$t->title}}
                        </option>
                        @endforeach
                       
                    </select>
                    
                </div>
            </div>

            <div class="">
                <label for="image" class=""></label>

                <div >
                   <input class="iii" type="file" name="image"/>

                    
                </div>
            </div>

            <div >
                <div align="">
                    <button   type="submit" class="btn btn-success">
                        {{ __('Post') }}
                    </button>
                </div>
            </div>

        </form>

    </div>

</section>








@endsection