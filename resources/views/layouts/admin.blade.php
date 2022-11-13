<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{URL::asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('assets/admin/dist/css/adminlte.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{URL::asset('assets/admin/fonts/SansPro/SansPro.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css')}}">
  <!-- My custom style -->
  <link rel="stylesheet" href="{{URL::asset('assets/admin/css/mycustomstyle.css')}}">
  @yield('more_css_files')
  <title>@yield('page_title')</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include("admin/includes/navbar")
    @include("admin/includes/sidebar")
    @include("admin/includes/content")
    @include("admin/includes/footer")
  </div>


  <!-- jQuery -->
  <script src="{{URL::asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{URL::asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{URL::asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
  @yield("more_js_files")
</body>

</html>