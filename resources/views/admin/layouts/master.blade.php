<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('/admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/assets/modules/fontawesome/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/admin/assets/modules/summernote/summernote-bs4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      @include('admin.layouts.nav')

      @include('admin.layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      @include('admin.layouts.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('/admin/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('/admin/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('/admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('/admin/assets/js/stisla.js') }}"></script>

  <script src="{{ asset('/admin/assets/modules/summernote/summernote-bs4.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('/admin/assets/js/page/index-0.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/admin/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>

  @stack('scripts')
</body>
</html>
