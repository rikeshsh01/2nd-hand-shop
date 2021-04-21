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
                        <h4 class="page-title text-uppercase font-medium font-14">Post Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- success message -->

            @if(Session::has('success'))

            <div class="alert alert-success" id="alert">
                <strong>Success:</strong> {{Session::get('success')}}
            </div>

            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-dark">
                                    <thead>
                                    <tr>
                                       <th class="border-top-0">SN</<th></th>
                                       <th class="border-top-0"  >User Name</th>
                                       <th class="border-top-0">E-mail</th>
                                       <th class="border-top-0">Role</th>
                                       <th class="border-top-0">Upload Date</th>
                                       <th class="border-top-0">Update</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $t)
                                    <tr>
                                       
                                          <th class="border-top-0">{{$loop->iteration}}</th>
                                          <th class="border-top-0">{{$t->name}}</th>
                                          <th class="border-top-0">{{$t->email}}</th>
                                          <th class="border-top-0">{{$t->user_type}}</th>
                                          <th class="border-top-0">{{$t->updated_at}}</th>
                                          <th class="border-top-0"> 
                                             
                                             <button class="btn-btn-success"><a href="{{"deleteUser/".$t['id']}}"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                                          </th>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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




