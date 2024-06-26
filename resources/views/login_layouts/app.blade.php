<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_templates/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_templates/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- custom CSS --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>


<body class="bg-gradient-custom d-flex align-items-center justify-content-center">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background: transparent;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row align-items-center">
                            <div class="col-lg-6 d-none d-lg-block bg-gradient-primary py-5"
                                style="background: transparent;">
                                <div class="p-5 my-5 text-center">
                                    <i class="fas fa-truck-monster fa-5x text-white"></i>
                                    <h1 class="h3 font-weight-bolder text-white my-3">Nickel Mining</h1>
                                    <h2 class="h6 text-white mb-4">Sistem Informasi Pemesanan Kendaraan</h2>
                                </div>
                            </div>
                            <div class="col-lg-6" style="background-color: white; ">
                                <div class="p-5">
                                    <div class="text-center mt-3">
                                        <div class="text-center">
                                            <h1 class="h3 font-weight-bolder text-gray-900 mb-2">Selamat Datang</h1>
                                            <h2 class="h6 font-weight-normal text-gray-900 mb-4">
                                                Masuk ke dalam sistem dengan akun anda untuk melanjutkan proses
                                                pemesanan kendaraan.
                                            </h2>
                                        </div>
                                    </div>

                                    @yield('form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_templates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_templates/js/sb-admin-2.min.js') }}"></script>
</body>



</html>
