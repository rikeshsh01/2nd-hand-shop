@extends('layouts.page')
@section('content')	
    <h1 align="center">Hello <br>  {{ Auth::user()->name }}  </h1>
    <hr>
    <div align="center" width="500px">
        <a href="categories.html">
            <img src="css/images/deadpool.jpg" width="100%">
        </a>
    </div> 

@endsection