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
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2> <img src="https://i.postimg.cc/PrCywBZh/logo-bwi.png" style="width : 45px"> Siubat</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="{{route('event.view.masyarakat')}}" class="nav-item nav-link">Event</a>
                <a href="{{route('umkm.view.masyarakat')}}" class="nav-item nav-link">UMKM</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- welcome message start -->
        <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="{{asset('frontend/img/kantor desa.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-10">
                            <h1 class="display-4 text-white animated slideInRight">SELAMAT DATANG DI SISTEM INFORMASI
                                DAN
                                UMKM DESA KABAT
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- welcome message end-->


        <!-- Carousel Start -->
        <!-- <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('frontend/img/brownis.jpg')}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown">Dusun Bodean
                                    </h1>
                                    <a href="#deskripsi_dusun"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('frontend/img/car.jpg')}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Slide 2
                                    </h5>
                                    <h1 class="display-3 text-white animated slideInDown">INI SLIDE 2
                                    </h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                        sed
                                        stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                        eirmod elitr.</p>
                                    <a href="#deskripsi_dusun"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('frontend/img/car.jpg')}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Slide 3
                                    </h5>
                                    <h1 class="display-3 text-white animated slideInDown">INI SLIDE 3
                                    </h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                        sed
                                        stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                        eirmod elitr.</p>
                                    <a href="#deskripsi_dusun"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('frontend/img/car.jpg')}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">slide 4
                                    </h5>
                                    <h1 class="display-3 text-white animated slideInDown">INI SLIDE 4
                                    </h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                        sed
                                        stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                        eirmod elitr.</p>
                                    <a href="#deskripsi_dusun"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div> -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{asset('frontend/img/aula.jpg')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Pengenalan</h6>
                        <h1 class="mb-4">Desa Kabat</h1>
                        <p class="mb-4">Kabat adalah sebuah kecamatan di Kabupaten Banyuwangi, Provinsi Jawa Timur,
                            Indonesia. Kecamatan Kabat memiliki 14 desa, diantaranya Desa Bareng, Desa Bunder, Desa
                            Gombolirang, Desa Benelan Lor, Desa Labanesem, Desa Pakistaji, Desa Pondoknongko, Desa
                            Dadapan,
                            Desa Kedayunan, Desa Kabat, Desa Macan Putih, Desa Tambong, Desa Pendarungan, dan Desa
                            Kalirejo.
                            Kecamatan Kabat memiliki luas wilayah 94,17 km2 yang dibagi ke dalam 14 desa. Wilayah
                            kecamatan
                            ini dilewati oleh sungai Tambong yang memiliki panjang 24,35 km.
                            .</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Carousel End -->
        <div class="container-xxl py-8">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <!-- <iframe width="500px" height="300px"
                                src="https://www.youtube.com/embed/rX8mia65UXg?autoplay=1&amp;controls=0&amp;start=0&amp;end=0&amp;modestbranding=1&amp;wmode=transparent&amp;enablejsapi=1&amp;loop=1&amp;rel=0&amp;mute=1"
                                data-src="https://www.youtube.com/embed/rX8mia65UXg?autoplay=1&amp;controls=0&amp;start=0&amp;end=0&amp;modestbranding=1&amp;wmode=transparent&amp;enablejsapi=1&amp;loop=1&amp;rel=0&amp;mute=1"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe> -->
                            <iframe class="img-fluid position-absolute w-100 h-100"
                                src="https://www.youtube.com/embed/xWJHv6jajzc?autoplay=1&amp;controls=0&amp;start=0&amp;end=0&amp;modestbranding=1&amp;wmode=transparent&amp;enablejsapi=1&amp;loop=1&amp;rel=0&amp;mute=1&amp;playlist=xWJHv6jajzc"
                                title="Kknt desa kabat" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                            </iframe>
                            <div class="img-fluid position-absolute w-100 h-100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Pengenalan</h6>
                        <h1 class="mb-4">Setiap Dusun di Desa Kabat</h1>
                        <p class="mb-4">
                            Dalam persentase kependudukan terdapat data penghasilan penduduk yang condong ke arah
                            pengusaha kecil, menengah, dan besar dikarenakan itu kami membuat suatu inovasi yang
                            berbentuk sistem informasi berbasis website untuk memperkenalkan UMKM yang terdapat pada
                            desa kabat yang dapat di akses oleh penduduk yang memiliki usaha.
                            Mata pencaharian penduduk desa Kabat bermayoritas sebagai seorang petani. Namu, selain
                            sebagai petani ada
                            juga yang memiliki pekerjaan sebagai pegawai negeri sipil, peternak, montir, perawat swasta,
                            TNI, Polri,
                            pengusaha (kecil, menengah, dan besar), dosen swasta, pedagang keliling, tukang batu,
                            pembantu rumah tangga, dan perangkat desa.
                            .</p>

                    </div>
                </div>
            </div>
        </div>



        <!-- Categories Start -->
        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Pembagian Wilayah</h6>
                    <h1 class="mb-5">Terdiri dari 4 Dusun</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="{{asset('frontend/img/bodean.jpeg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Bodean</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="{{asset('frontend/img/karang.jpeg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Karangrejo</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="{{asset('frontend/img/krajan.jpeg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Krajan</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{asset('frontend/img/mantren.jpeg')}}" alt="" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin:  1px;">
                                <h5 class="m-0">Mantren</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Start -->

        <!-- Service Start -->
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h5 class="mb-3">Bodean</h5>
                        <p>UMKM yang dominan di dusun ini yaitu dalam bidang kerajinan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h5 class="mb-3">Karangrejo</h5>
                        <p>UMKM yang dominan di dusun ini yaitu produksi tahu</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h5 class="mb-3">Krajan</h5>
                        <p>UMKM yang dominan di dusun ini yaitu pembuatan roti basah dan kering</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h5 class="mb-3">Mantren</h5>
                        <p>UMKM yang dominan di dusun ini yaitu dalam pembuatan tempe sagu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Service End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kontak</h6>
                <h1 class="mb-5">Informasi Kontak</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">
                        Jika Anda membutuhkan bantuan atau informasi lebih lanjut silahkan menghubungi :
                    </p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Kantor</h5>
                            <p class="mb-0"> Jl. Kabat, Mantren, Kabat, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur
                                68461</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <img src="https://i.postimg.cc/0jKqVF78/www.png" style="width : 25px">
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Website</h5>
                            <p class="mb-0">kabat.desa.id</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">desakabat@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-500 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15793.008806772172!2d114.32658147423524!3d-8.27767880341727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15091b912dd65%3A0x445c2e9f4c9d3578!2sKantor%20Desa%20Kabat!5e0!3m2!1sid!2sid!4v1681440136169!5m2!1sid!2sid"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
    </div>

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
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>