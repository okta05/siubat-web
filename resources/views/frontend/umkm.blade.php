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
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2> <img src="https://i.postimg.cc/PrCywBZh/logo-bwi.png" style="width : 45px"> Siubat</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="{{route('event.view.masyarakat')}}" class="nav-item nav-link">Event</a>
                <a href="" class="nav-item nav-link active">UMKM</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    @foreach($allDataUMKM as $key => $umkm)
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card d-inline-block w-100 p-2" style="
                    height: 100%!important;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid #e3e6f0;
                    border-radius: 0.35rem;
                    border-radius: 0.35rem;
                    margin-top: 15px;
                    ">
                            @if($umkm->foto)
                            <img src="{{asset('storage/'. $umkm->foto)}}" alt="" class="card-img-top"
                                style="height: auto; display: block;">
                            @else
                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top">
                            @endif
                            <hr>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <ul class="list-group">
                                        <li class="list-unstyled">
                                            <h2 class="card-title">Nama : {{$umkm->nm_produk}}</h5>
                                        </li>
                                        <li class="list-unstyled">
                                            <p class="">Pemilik: {{$umkm->nm_pemilik}}</p>
                                        </li>
                                        <li class="list-unstyled">
                                            <p class="">Harga: Rp. {{$umkm->harga}}</p>
                                        </li>
                                        <li class="list-unstyled">
                                            <p class="">Alamat: {{$umkm->alamat}}</p>
                                        </li>
                                        <li class="list-unstyled">
                                            <p class="">Deskripsi Produk: {{$umkm->deskripsi}}</p>
                                        </li>

                                        <div>
                                            <p><b>Gambar Produk</b></p>
                                            @if($umkm->produk1)
                                            <img src="{{asset('storage/'. $umkm->produk1)}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @else
                                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @endif

                                            @if($umkm->produk2)
                                            <img src="{{asset('storage/'. $umkm->produk2)}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @else
                                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @endif
                                        </div>

                                        <div>
                                            <br>
                                            @if($umkm->produk3)
                                            <img src="{{asset('storage/'. $umkm->produk3)}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @else
                                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @endif

                                            @if($umkm->produk4)
                                            <img src="{{asset('storage/'. $umkm->produk4)}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @else
                                            <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                                id="foto_produk">
                                            @endif
                                        </div><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
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
                            <a href="/">Home</a>
                            <a href="{{route('event.view.masyarakat')}}">Event</a>
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
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>