@extends('layouts.backend.master')

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Product Details</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="container" align="center">
                <br>
                <hr>
                <br>
                <div class="container" width="100%">
                    <img style="border-radius: 15px;" src="{{asset('/uploadimage/'.$posts->image)}}" width="500px" alt="product image">
                </div>
            </div>

            <br>
            <hr>
            <br>
        <div align="center";>
        <table class="table"  style="background-color:rgb(254, 255, 254); width:50%; border-radius:15px;">        
            <tr>
                <td>
                    <h5> Product Name: </h5>
                </td>
                <td>
                    <h5> {{$posts->name}} </h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5> Product Price: </h5>
                </td>
                <td>
                    <h5> Rs {{$posts->price}} only </h5>
                </td>
            </tr>    
            
            
            <tr>
                <td>
                    <h5> Product Detail: </h5>
                </td>
                <td style="margin-left: -100px;">
                    <h5> {{$posts->details}} </h5>
                </td>
                
            </tr>
        
        
            <tr>
                <td>
                    <h5> Product Issues: </h5>
                </td>
                <td>
                    <h5> {{$posts->description}} </h5>
                </td>
            </tr>
                

               
            </table>
            <br>
            <br>
            <br>

        </div>

        
   
</div>




@endsection