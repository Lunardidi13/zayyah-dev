<!DOCTYPE html>
<html lang="en">

{{-- Head --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zayya - Development</title>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

{{-- Body --}}

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/navbar-logo.png') }}" alt="..." height="30">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-center fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center fw-bold" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center fw-bold" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center fw-bold" href="#">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="container"> --}}
        @yield('content')
    {{-- </div> --}}

    <script src="{{ asset('js\bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js\bootstrap.min.js') }}"></script>

</body>

<!-- Footer -->
<footer class="text-center text-lg-start text-muted footer-bg">

    <section class="border-bottom p-3 footer-bg">
        <div class="container text-center d-flex flex-column justify-content-around">
            <div class="container d-none d-lg-block">
                <p class="lead">Follow our social media:</p>
            </div>
            <div class="container my-1">
                <a href="#" class="me-3 text-reset lead" style="text-decoration: none">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="me-3 text-reset lead" style="text-decoration: none">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="#" class="me-3 text-reset lead" style="text-decoration: none">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="me-3 text-reset lead" style="text-decoration: none">
                    <i class="bi bi-shop"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Section: Links  -->
    <section class="footer-bg">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        ZAYYA
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">PRODUCT SKIN CARE</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PRODUCT SKIN CARE</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PRODUCT SKIN CARE</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PRODUCT SKIN CARE</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">INSTAGRAM</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">TOKOPEDIA</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">???</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">???</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> Jakarta Utara, DKI Jakarta, Indonesia</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 62 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 62 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.3); color: white;">
        ?? 2022 Copyright Zayya
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</html>
