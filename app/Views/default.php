<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Refriaire MX - Refrigeración y aire acondicionado para transporte</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url()?>/img/favicon-32x32.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url()?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url()?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url()?>/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid topBar p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="bi bi-envelope text-white me-2"></small>
                <small><a href="mailto:contacto@refriairemx.com" class="linkWhite">contacto@refriairemx.com</a> </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="bi bi-telephone text-white me-2"></small>
                <small><a href=""  class="linkWhite">+52 81 8377 1068</a></small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="<?= base_url()?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="<?= base_url('img/refriAireLogo.png')?>" class="mainLogo">
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url()?>" class="nav-item nav-link active">Inicio</a>
            <a href="<?= base_url()?>" class="nav-item nav-link">Servicio</a>
            <a href="<?= base_url()?>" class="nav-item nav-link">Industrias</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Productos</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="<?= base_url()?>" class="dropdown-item">Tractocami&oacute;n</a>
                    <a href="<?= base_url()?>" class="dropdown-item">Equipo especial</a>
                    <a href="<?= base_url()?>" class="dropdown-item">Autobuses</a>
                    <a href="<?= base_url()?>" class="dropdown-item">Refrigeraci&oacute;n</a>
                    <a href="<?= base_url()?>" class="dropdown-item">Maquinaria</a>
                </div>
            </div>
            <a href="<?= base_url()?>" class="nav-item nav-link">Contacto</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<?= $this->renderSection('contenido') ?>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Contacto</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Las Américas 750, Hacienda los Morales 3er Sector, N.L</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+52 81 8377 1068</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:contacto@refriairemx.com">contacto@refriairemx.com</a> </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Ligas de interes</h5>
                <a class="btn btn-link" href="">Inicio</a>
                <a class="btn btn-link" href="">Productos</a>
                <a class="btn btn-link" href="">Servicios</a>
                <a class="btn btn-link" href="">Indutrias</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Galeria de fotos</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-1-vertical-1.png')?>" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-3-1.png')?>" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-7-1.png')?>" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-22-1.png')?>" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-20-1.png')?>" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="<?= base_url('img/galeria/Imagen-10-1.png')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<a href="https://wa.me/5218126291898" class="float" target="_blank">
    <img src="<?= base_url('img/whatsapp-logo.png')?>" width="64" />
</a>
<div class="float2 visible-xs-block hidden-xs">&iexcl;Hola! &iquest;En qu&eacute; podemos <br />ayudarte?</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>/lib/wow/wow.min.js"></script>
<script src="<?= base_url()?>/lib/easing/easing.min.js"></script>
<script src="<?= base_url()?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url()?>/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url()?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url()?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url()?>/js/main.js"></script>
</body>

</html>
