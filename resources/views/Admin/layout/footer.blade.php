  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{url('')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{url('')}}/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- Bootstrap 4 -->
 <script src="{{url('')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 
<!-- Bootstrap 4 rtl -->



<!-- Bootstrap 4 -->

{{-- <!-- ChartJS -->
<script src="{{url('')}}/plugins/chart.js/Chart.min.js"></script>
Sparkline
<script src="{{url('')}}/plugins/sparklines/sparkline.js"></script> --}}
<!-- JQVMap -->
<{{-- script src="{{url('')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('')}}/plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<!-- daterangepicker -->

@if(App::getLocale('ar'))

<script src="{{url('')}}dist/ar/bootstrapAr.min.js"></script>
@endif

<script src="{{url('')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
 @toastr_js
    @toastr_render
{{-- <script src="{{url('')}}/plugins/summernote/summernote-bs4.min.js"></script> --}}
{{-- overlayScrollbars --}}
<script src="{{url('')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{url('')}}/dist/js/demo.js"></script> --}}
{{-- AdminLTE dashboard demo (This is only for demo purposes) --}}
{{-- <script src="{{url('')}}/dist/js/pages/dashboard.js"></scrip --}}t> 


@stack('js')
</body>
</html>
