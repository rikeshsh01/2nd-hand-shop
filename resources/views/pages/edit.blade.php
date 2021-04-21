@extends('layouts.page')
@section('content')	


<div align="center"><h1>Edit Post</h1> </div>

<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                    <div class="container mt-5"> 
                    @if ($message=Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>

                    </div>
                    @endif
                        

                    </div>
                <div class="container" align="center">
                    <form method="POST" action="{{ url('uploadpost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus placeholder="Product name">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="description" value="" required autocomplete="name" autofocus placeholder="Short description of product">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="details" value="" required autocomplete="name" autofocus placeholder="Details of the product">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="price" value="" required autocomplete="name" autofocus placeholder="Selling price">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('categories') }}</label>

                            <div class="col-md-1">
                                <select name="categories" id="categories" >
                                    <option >Other</option>
                                    <option >Computer</option>
                                    <option >Mobile</option>
                                    <option >Cycle</option>
                                    <option >TV</option>
                                   
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-1">
                               <input type="file" name="image"/>

                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="">
                                <button   type="submit" class="btn btn-primary">
                                    {{ __('post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection