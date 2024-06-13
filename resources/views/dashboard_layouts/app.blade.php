<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nikel Mine - @yield('title')</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_templates/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin_templates/vendor/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_templates/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_templates/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('dashboard_layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('dashboard_layouts.navbar')

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('dashboard_layouts.footer')

        </div>
        <!-- End of Content Wrapper -->
    </div>
    @include('dashboard_layouts.toTop')

    @include('dashboard_layouts.logoutModal')

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_templates/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin_templates/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin_templates/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin_templates/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin_templates/js/demo/chart-bar-demo.js') }}"></script>

    <script src="{{ asset('admin_templates/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_templates/js/demo/datatables-demo.js') }}"></script> --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_templates/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin_templates/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin_templates/js/demo/datatables-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin_templates/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin_templates/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin_templates/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin_templates/js/demo/chart-bar-demo.js') }}"></script>

</body>

</html>
