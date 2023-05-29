<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Siubat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- css backend start -->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- css backend end -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2> <img src="https://i.postimg.cc/PrCywBZh/logo-bwi.png" style="width : 45px"> Siubat</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="" class="nav-item nav-link active">Event</a>
                <a href="{{route('umkm.view.masyarakat')}}" class="nav-item nav-link">UMKM</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            @foreach($allDataAcara as $key => $acara)
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card d-inline-block w-100 p-2" style="
            height: 100%!important;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            ">
                    @if($acara->foto)
                    <img src="{{asset('storage/'. $acara->foto)}}" alt="" id="cover_acara" class="card-img-top"
                        style="height: auto; display: block;">

                    @else
                    <img src="{{asset('backend/img/no-image.jpg')}}" alt="" id="cover_acara" class="card-img-top">
                    @endif
                    <hr>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <ul class="list-group">
                                <li class="list-unstyled">
                                    <h2 class="card-title">{{$acara->nm_acara}}</h5>
                                </li>
                                <li class="list-unstyled">
                                    <p class="">Tanggal Mulai: {{$acara->tgl_mulai}}</p>
                                </li>
                                <li class="list-unstyled">
                                    <p class="">Tanggal Selesai : {{$acara->tgl_selesai}}</p>
                                </li>
                                <li class="list-unstyled">
                                    <p class="">Durasi : {{$acara->durasi}}</p>
                                </li>
                                <li class="list-unstyled">
                                    Deskripsi : <p class="text-justify d-inline">{{$acara->deskripsi}}</p>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p><b>Gambar Event</b></p>
                            @if($acara->foto_acara1)
                            <img src="{{asset('storage/'. $acara->foto_acara1)}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @else
                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @endif

                            @if($acara->foto_acara1)
                            <img src="{{asset('storage/'. $acara->foto_acara1)}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @else
                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @endif

                            @if($acara->foto_acara1)
                            <img src="{{asset('storage/'. $acara->foto_acara1)}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @else
                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @endif

                            @if($acara->foto_acara1)
                            <img src="{{asset('storage/'. $acara->foto_acara1)}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @else
                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                id="foto_acara">
                            @endif
                        </div>

                        <br>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- End of Main Content -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    Kantor Desa Kabat, Banyuwangi 2023
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Event</a>
                            <a href="">UMKM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- js page event start -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>
    <!-- js page event end -->

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>