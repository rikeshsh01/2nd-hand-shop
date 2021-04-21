<footer class="footer text-center">

<p>Copyright 2nd Hand Buy& Sell © 2021.All Rights Reserved. <br> Designed &amp; Developed by <a href="/" target="_blank" style="color: #000;"><b>MDR Software</b>.</a></p>

</footer>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
    <!-- <script src="{{asset('backend/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script> -->
    <script src="{{asset('backend/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('backend/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('backend/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('backend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('backend/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('backend/js/pages/dashboards/dashboard1.js')}}"></script>

    <!-- summernote -->
    <script src="{{asset('backend/summernote/summernote.js')}}"></script>

    <!-- timeout alert -->
    <script>
        setTimeout(function(){
            $('#alert').slideUp();
        },5000);
    </script>

    <!-- ajax cdn
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- switch button -->
<script src="{{asset('backend/switch-button/bootstrap-toggle-master/js/bootstrap-toggle.js')}}"></script>
    @yield('scripts') 

   