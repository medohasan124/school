<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'admin lte'}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{url('')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{url('')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{url('')}}/plugins/jqvmap/jqvmap.min.css"> --}}
  <!-- Theme style -->
@stack('css')
  @if(App::getLocale()  != 'ar')
  <link rel="stylesheet" href="{{url('')}}/dist/css/adminlte.min.css">
  @endif
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{url('')}}/plugins/daterangepicker/daterangepicker.css">
  summernote
  <link rel="stylesheet" href="{{url('')}}/plugins/summernote/summernote-bs4.min.css"> --}}


  @if(App::getLocale() == 'ar')

  <link rel="stylesheet" href="{{url('')}}/dist/ar/adminlteAr.min.css">

  <link rel="stylesheet" href="{{url('')}}/dist/ar/bootstrapAr.min.css">
  <!-- Custom style for RTL -->
  <link rel="stylesheet" href="{{url('')}}/dist/ar/custom.css">
@endif
@toastr_css

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
