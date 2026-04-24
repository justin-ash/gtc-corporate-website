<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/admin/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        {{-- Header --}}
        @include('admin.partials.header')
        <div class=" container-fluid page-body-wrapper">
            @include('admin.partials.sidebar')
            <div class="main-panel">
                @yield('content')
                {{-- Footer --}}
                @include('admin.partials.footer')
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/admin/js/template.js') }}"></script>
    <script src="{{ asset('/admin/js/settings.js') }}"></script>
    <script src="{{ asset('/admin/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>