<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PPDB SMA Wahidiyah</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  @yield('css')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('panel.header')
@include('panel.sidebar')
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
@yield('content')
        </div>
      </div>
    </div>

  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>

  @yield('footer')

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@yield('script')

<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
