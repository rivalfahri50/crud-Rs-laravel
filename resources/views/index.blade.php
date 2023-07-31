    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset ('assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset ('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{ asset ('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset ('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{  asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="')}} crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body id="page-top">

        <!-- Navigation-->
                            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                                <div class="container">
                                    <a class="navbar-brand" href="#page-top"></a>
                                    <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                         <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarResponsive">
                                        <ul class="navbar-nav ms-12 justify-content-center">
                                            <li class="nav-item mx-0 mx-lg-1 "><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('dokter.index') }}">Dokter</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('perawat.index') }}">Perawat</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('pasien.index') }}">Pasien</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('no_antrian.index') }}">NoAntrian</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('obat.index') }}">Obat</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('satpam.index') }}">Satpam</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('ruang_operasi.index') }}">R.Operasi</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('pembayaran.index') }}">Pembayaran</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('alat_kesehatan.index') }}">Alat Kesehatan</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('jadwal_dokter.index') }}">Jadwal Dokter</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('kunjungan.index') }}">Kunjungan</a>
                                            <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('signout') }}" class="nav-link py-3 px-0 px-lg-3 rounded">></a>
                                        </ul>
                                    </div>
                                </div>
                                </nav>
                    <nav>
                                <header class="masthead bg-primary text-white text-center">
                                    <div class="container d-flex align-items-center flex-column">
                                        <!-- Masthead Avatar Image-->
                                        <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                                        <!-- Masthead Heading-->
                                        <h1 class="masthead-heading text-uppercase mb-2">Rumah Sakit</h1>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom divider-light">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Masthead Subheading-->
                                        <p class="masthead-subheading font-weight-light mb-0">Menangani Dan Mengobati</p>
                                    </div>
                                </header>
                            </nav>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core theme JS-->
        <script src="{{ asset ('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="{{ asset ('https://cdn.startbootstrap.com/sb-forms-latest.js')}}"></script>
        @include('sweetalert::alert')
    </body>

</html>
