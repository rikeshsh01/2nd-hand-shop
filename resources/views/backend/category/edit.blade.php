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
                        <h4 class="page-title text-uppercase font-medium font-14">Edit Category</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                
                

                <!-- error message with validation -->

                @if($errors->any())
                    <div class="alert alert-danger" id="alert">
                        <strong>Whoops!</strong> There were some problems with ypur input <br><br>

                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif



                <form action="{{route('categoryy.update',$categoryEdit->id)}}" method="POST">

                    @csrf
                    @method('patch')
                    <div class="container">
                        <div class="row">
                                            
                            <div class="col-md-12 col-sm-12" >
                                    <div class="form-group">
                                        <label for="">Title<span class="text-danger">*</span></label>
                                        <input name="title" class="form-control" placeholder="Title" value="{{$categoryEdit->title}}" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12" >
                                    <div class="form-group">
                                        <label for="">Summary<span class="text-danger">*</span></label>
                                        <textarea id="description" name="summary" class="form-control" value="{{$categoryEdit->summary}}"></textarea>
                                    </div>
                                </div>

                               

                                


                                
                            

                               
                                <div class="col-md-12 col-sm-12" >
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="cancel" class="btn btn-outline-secondary" >Cancel</button>
                                </div>
                                </div> 
                            </div>
                        </div>

                    </div>
                   
                </form>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
</div>

@endsection


