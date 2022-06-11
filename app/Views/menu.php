<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title>Latelier Du Cafe</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets2/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="assets2/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets2/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets2/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="assets2/images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            <img src="assets/images/logo.png" alt="" width="100" height="100">
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="EnvioImg">Cargar imagen para impresion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="comment">Buzon de comentarios</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Nuestras Redes<span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acerca de nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin">Administrador</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- food section -->

    <section class="food_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Nuestro Menu
                </h2>
            </div>

            <ul class="filters_menu">
                <li class="active" data-filter="*">Todos</li>
                <li data-filter=".category-1">Brunch</li>
                <li data-filter=".category-2">Platos Dulces</li>
                <li data-filter=".category-3">Bebidas Calientes</li>
                <li data-filter=".category-4">Bebidas Frias</li>
                <li data-filter=".category-5">Bebidas Frias Con Cafe</li>
                <li data-filter=".category-6">Bebidas Calientes Sin Cafe</li>
                <li data-filter=".category-7">Postres</li>
                <li data-filter=".category-8" class="text-warning">Especialidad</li>
            </ul>

            <div class="filters-content">
                <div class="row grid">
                    <?php foreach ($products as $key => $value) : ?>
                    <div class="col-6 col-lg-4 all <?= "category-" . $value["id_category"] ?>">
                        <div class="box">
                            <div>
                                <!-- ini img -->
                                <!-- <div class="img-box"> -->
                                <img src="<?= $value["url_img"] ?>" onclick="zoom('myImg<?= $key ?>')"
                                    id="myImg<?= $key ?>" class="img-fluid image-pixju" alt="">
                                <!-- </div> -->
                                <!-- end img -->

                                <div class="detail-box">
                                    <h5>
                                        <?= $value["name"] ?>
                                    </h5>
                                    <p>
                                        <?= $value["description"] ?>
                                    </p>
                                    <div class="options">
                                        <h6>
                                            $ <?= $value["price"] ?>
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

            </div>

            <!-- <div class="btn-box">
                <a href="">
                    View More
                </a>
            </div> -->

        </div>
    </section>

    <!-- end food section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            ¿Quienes somos?
                        </a>
                        <p>
                            Somos una tienda con cafe de especialidad.
                        </p>
                        <div class="footer_social">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <!-- <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a> -->
                            <!-- <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a> -->
                            <a href="https://www.instagram.com/latelierducafecali/?hl=es" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <!-- <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Horarios
                    </h4>
                    <p>
                        Todos los dias
                    </p>
                    <p>
                        09.00 Am - 08.30 Pm
                    </p>
                    <p>
                        Feriados
                    </p>
                    <p>
                        09.00 Am - 08.30 Pm
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    <center>
                        &copy; <span id="displayYear"></span> Todos los derechos reservador por
                        <img style=" display: block; margin-left: auto; margin-right: auto;"
                            src="assets/images/logo.png" alt="" width="80" height="80" class="mb-3">
                        &copy; <span id="displayYear"></span> Desarrolado por
                        <!-- <a href="#">Pixju Lab</a><br><br> -->
                    </center>
                    <center>
                        <a href="http://pixju.com" class="col-xs-12 text-warning" target="_blank">
                            <!-- <div class="text-center p">Desarrollado por</div> -->
                            <img style=" display: block; margin-left: auto; margin-right: auto;"
                                src="assets/images/pixju-logo.png" alt="" width="75" height="30">
                        </a>
                    </center>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="assets2/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="assets2/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="assets2/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>

    <script src="assets2/js/script-pixju.js"></script>
    <!-- End Google Map -->

</body>

</html>