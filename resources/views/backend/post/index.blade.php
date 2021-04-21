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
                                <table style="table-layout: fixed" class="table table-hover table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th  class="border-top-0">S.N</th>
                                            <th class="border-top-0">Title</th>
                                            <th style="word-break: break-all" class="border-top-0">Description</th>
                                            <th style="word-break: break-all" class="border-top-0">Issue</th>
                                            <th class="border-top-0">Photo</th>
                                            <th class="border-top-0">Posted By</th>
                                            
                                            <th class="border-top-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $items)
                                        <tr>
                                            <th class="border-top-0">{{$loop->iteration}}</th>
                                            <th class="border-top-0">{{$items->name}}</th>
                                            <th style="word-break: break-all" class="border-top-0">{!! html_entity_decode($items->details)!!}</th>
                                            <th style="word-break: break-all" class="border-top-0">{!! html_entity_decode($items->description)!!}</th>
                                            <th class="border-top-0"><img src="{{asset('/uploadimage/'. $items->image)}}" alt="post image" style="max-height:100px; max-width:120px;"></th>
                                            <th class="border-top-0">{{$items->user->name}}</th>
                                            <th>
                                            <a href="/detail/{{$items->id}}" data-toggle="tooltip" class="btn btn-sm btn btn-outline-warning" title="view" data-placement="bottom">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            
                                            <button class="btn-btn-primary">
                                                <a href="{{"deletePost/".$items['id']}}" title="delete">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </button>
                                               
                                                
                                                
                                            
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

@section('scripts')


@endsection

