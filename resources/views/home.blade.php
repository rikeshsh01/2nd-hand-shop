@extends('layouts.page')

@section('content')

<br>
                <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" id="alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="{{ url('index') }}" class="text-sm text-gray-700 underline"> <h1> Kabaadi Online Market </h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
