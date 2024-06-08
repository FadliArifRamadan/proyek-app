<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- favicon -->
    <link rel="icon" type="image" href="assets/img/logo/logo_pbvsi-1-80x80.png">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">

    <title>PBVSI - Home</title>
</head>

<body>
    <!-- navbar start -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand ms-lg-5" href="/"><img src="assets/img/logo/logo_pbvsi-1-80x80.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active" id="home" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                TENTANG PBVSI
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="tentang-kami">TENTANG KAMI</a></li>
                                <li><a class="dropdown-item" href="struktur-organisasi">STRUKTUR ORGANISASI</a></li>
                                <li><a class="dropdown-item" href="atlet-kota-cirebon">DATA ATLET KOTA CIREBON</a></li>
                                <li><a class="dropdown-item" href="hubungi-kami">HUBUNGI KAMI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                BOLA VOLI
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="peraturan">PERATURAN</a></li>
                                <li><a class="dropdown-item" href="club-voli">CLUB VOLI</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar end -->

    <!-- carousel strat -->
    <section id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="image/{{ $slider->image }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- carousel end -->

    <!-- profil ketua start -->
    <section id="profil-ketua">
        <div class="profil-ketua mt-5">
            <div class="container">
                <div class="content-title">
                    <h3 class="fw-bold">KETUA PBVSI KOTA CIREBON</h>
                </div>
                <div class="content">
                    @foreach ($pbvsis as $pbvsi)
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card shadow p-3 mb-5 bg-body rounded" id="card-photo"">
                                <img src=" image/{{ $pbvsi->image }}" alt="" />
                                <div class="card-body-photo">
                                    <h5>Ketua PBVSI Kota Cirebon</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card-text">
                                <h5>{{ $pbvsi->title }}</h5>
                                <p class="card-body-text">{{$pbvsi->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- profil ketua end -->

    <!-- prestasi start -->
    <section id="prestasi">
        <div class="container mt-5">
            <div class="title-container">
                <h3 class="fw-bold">PRESTASI</h3>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="slider-container">
                        <div class="slider">
                            @foreach ($prestasis as $prestasi)
                            <div class="slide">
                                <img src=" image/{{ $prestasi->image }}" alt="" />
                                {{-- <div class="caption">Caption 1</div> --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div id="container-gambar">
                        @foreach ($prestasis as $prestasi)
                        <div id="gambar">
                            <div class="card card shadow p-3 mb-5 bg-body rounded" id="card-gambar"">
                                <img src=" image/{{ $prestasi->image }}" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
                {{-- <div class="masonry">
                    <div class="masonry-sizer"></div>
                    @foreach ($prestasis as $prestasi)
                    <div class="masonry-item m-2">
                        <img src="image/{{ $prestasi->image }}" alt="" class="img-fluid">
                    </div>
                    @endforeach
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="card" style="width: 22rem;">
                        <img src="assets/img/prestasi/p4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="jadwal">
                                <i class='bx bx-calendar'></i>
                                <p>Mar 25, 2023</p>
                            </div>
                            <h5 class="card-title">Volley Ball Gubernur Cup 2023</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eos,
                                eveniet tenetur veniam placeat asperiores, exercitationem voluptatibus dolorum provident
                                modi aut iure ipsam reprehenderit culpa, perferendis obcaecati atque blanditiis minus.
                            </p>
                            <a href="detail-prestasi" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- <section id="berita">
        <div class="container mt-5">
            <div class="content-title-berita">
                <h3 class="fw-bold">BERITA TERBARU</h3>
            </div>
            <div class="content-berita">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" id="card-berita">
                            <a href="#" class="card">
                                <img src="assets/img/berita/b1.jpg" alt="">
                                <div class="card-body-berita">
                                    <i class='bx bx-calendar'></i>
                                    <p>Mar 25, 2023</p>
                                </div>
                                <div class="card-title">
                                    <h5>Iste sequi culpa dignissimos error sint enim nemo necessitatibus,</h5>
                                </div>
                            </a>
                            <div class="card-text-berita">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-primary mb-3">Berita Lainnya</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- prestasi end -->

    <!-- footer start -->
    <section id="footer">
        <div class="footer-top">
            <div class="container-fluid bg-dark text-white mt-5 p-4">
                <div class="row">
                    <!-- FIRST -->
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="first-title">
                            <h5 class="fw-bold mb-3">TENTANG PBVSI</h5>
                        </div>
                        <a href="#"><img src="assets/img/logo/logo_pbvsi-1-80x80.png" alt=""></a>
                        <div class="first-content mt-3">
                            <p>Persatuan Bola Voli Seluruh Indonesia disingkat PBVSI adalah organisasi yang mengatur
                                kegiatan
                                olahraga Voli di Kota Cirebon, dengan ketua umumnya adalah <strong>Drs.
                                    Sekhurohman</strong>
                            </p>
                        </div>
                    </div>
                    <!-- SECOND -->
                    <div class="col-md-4">
                        <div class="second-title">
                            <h5 class="fw-bold mb-5">HUBUNGI KAMI</h5>
                        </div>
                        @foreach ($informasis as $informasi)
                        <div class="second-content">
                            <h6 class="fw-bold">Kantor Pusat</h6>
                            <p>{{ $informasi->alamat }}</p>
                            <h6 class="fw-bold mt-4">Telepon</h6>
                            <p>{{ $informasi->telepon }}</p>
                        </div>
                        @endforeach
                    </div>
                    <!-- THIRD -->
                    <div class="col-md-3">
                        <div class="third-title">
                            <h5 class="fw-bold mb-5">ORGANISASI KAMI</h5>
                            <ul class="list-group list-unstyled">
                                <a href="tentang-kami" class="text-decoration-none mb-4">
                                    <li class="list-item">TENTANG KAMI</li>
                                </a>
                                <a href="struktur-organisasi" class="text-decoration-none mb-4">
                                    <li class="list-item">STRUKTUR ORGANISASI</li>
                                </a>
                                <a href="atlet-kota-cirebon" class="text-decoration-none">
                                    <li class="list-item">DATA ATLET KOTA CIREBON</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down">
            <div class="container-fluid bg-draker text-white py-4">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            Copyright &copy; 2023 PBVSI Kota Cirebon. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-2">
        <i class='bx bx-chevron-up'></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="assets/lib/mansory/masonry.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>