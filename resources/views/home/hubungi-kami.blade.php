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
    <link rel="stylesheet" href="assets/css/hubungi-kami.css">

    <title>PBVSI - Hubungi Kami</title>
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

    <!-- contact start -->
    <section id="hubungi-kami">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-title">
                        <h3 class="fw-bold">Informasi dan Pertanyaan</h3>
                    </div>
                    <div class="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3549171999152!2d108.55707727424044!3d-6.726477265766243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d8dcaf69f93%3A0x1f0ef86ce7f824f!2sPerusahaan%20Daerah%20Pasar%20Kota%20Cirebon!5e0!3m2!1sid!2sid!4v1691353539438!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($informasis as $informasi)
                <div class="col-md-12">
                    <div class="content">
                        <div class="address">
                            <i class='bx bxs-map'></i>
                            <h5 class="fw-bold">Kantor Pusat</h5>
                            <p>{{ $informasi->alamat }}</p>
                        </div>
                        <div class="phone">
                            <i class='bx bxs-phone'></i>
                            <h5 class="fw-bold">Telepon</h5>
                            <p>{{ $informasi->telepon }}</p>
                        </div>
                        <div class="email">
                            <i class='bx bxs-envelope'></i>
                            <h5 class="fw-bold">Email</h5>
                            <p>{{ $informasi->email }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @error('name')
                    <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('email')
                    <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    @error('description')
                    <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="form-control" name="description" id="" rows="5"
                            placeholder="Type your message here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit">Send Message</button>
                    </div>
                </form>
            </div> --}}
        </div>
    </section>
    <!-- contact end -->

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