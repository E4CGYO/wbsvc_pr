@extends('layouts.layout2')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDOCHEF</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Navbar overlay di atas carousel */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050;
            transition: background-color 0.3s ease;
        }

        /* Navbar transparan di awal */
        .navbar-transparent {
            background-color: transparent;
        }

        /* Navbar saat scroll */
        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.85);
        }

        /* Warna teks navbar */
        .navbar .nav-link,
        .navbar .navbar-brand {
            color: #ffffff !important;
        }

        /* Carousel benar-benar menempel ke atas */
        .carousel,
        .carousel-item,
        .carousel-item img {
            height: 100vh;
        }

        .carousel-item img {
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-transparent">
    <div class="container-fluid">

        <!-- Brand + Menu di KIRI -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold me-4" href="/">GDA GDI COOK</a>

            <ul class="navbar-nav flex-row gap-3">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="/">Home</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>

        <!-- Toggle Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMobile">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</nav>

<!-- CAROUSEL  -->
<div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="3000">
            <img src="/images/masak1.jpg" class="d-block w-100" alt="Masak 1">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-4 fw-bold">Resep Masakan Nusantara</h1>
                <p class="lead">Cita rasa khas Indonesia</p>
            </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
            <img src="/images/masak4.jpg" class="d-block w-100" alt="Masak 2">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-4 fw-bold">Masak Jadi Mudah</h1>
                <p class="lead">Praktis & lezat</p>
            </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
            <img src="/images/gambar3.jpeg" class="d-block w-100" alt="Masak 3">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-4 fw-bold">Inspirasi Dapur</h1>
                <p class="lead">Ide setiap hari</p>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button"
            data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
            data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scroll effect navbar -->
<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('navbar-transparent');
        } else {
            navbar.classList.remove('scrolled');
            navbar.classList.add('navbar-transparent');
        }
    });
</script>

</body>
</html>
