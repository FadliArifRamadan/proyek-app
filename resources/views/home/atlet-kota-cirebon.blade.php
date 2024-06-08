<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- favicon -->
    <link rel="icon" type="image" href="assets/img/logo/logo_pbvsi-1-80x80.png">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/atlet-kota-cirebon.css">

    <title>PBVSI - Atlet Kota Cirebon</title>
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
                            <a class="nav-link" id="home" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="dropdown" role="button"
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

    <!-- atlet kota cirebon start -->
    <section id="atlet">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-title">
                        <h2 class="fw-bold">DAFTAR NAMA ATLET BOLA VOLI KOTA CIREBON</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <form action="/atlet-kota-cirebon">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search..." name="search"
                                        value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="content table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Gambar Pemain</th>
                                    <th>NAMA PEMAIN</th>
                                    <th>POSISI PEMAIN</th>
                                    <th>CLUB PEMAIN</th>
                            </thead>
                            <tbody>
                                @php
                                $i = 1
                                @endphp
                                @foreach ($atlets as $atlet)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="image/{{ $atlet->image }}" alt="" class="img-fluid"></td>
                                    <td>{{ $atlet->nama }}</td>
                                    <td>{{ $atlet->posisi }}</td>
                                    <td>{{ $atlet->club }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $atlets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- atlet kota cirebon end -->

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
</body>

</html>