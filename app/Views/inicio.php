<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>L' Atelier</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="assets/css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="assets/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="assets/images/642b74e35250816a878a3aefb6848a81.jpg">
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="assets/images/logo.png" alt="" height="75" width="75">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Inicio</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="EnvioImg">Cargar imagen para impresion</a></li>
                                    <li><a href="#about">Mas de nuestros productos</a></li>
                                    <li><a href="comment">Buzon de comentarios</a></li>
                                    <li><a href="admin">Administracion</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->

    <!-- <div id="banner" class="banner full-screen-mode parallax"> -->
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h1>Tibio ni el
                            <br>
                            <span class="typer" id="some-id" data-delay="150" data-delim=":" data-words="Amor:Café"
                                data-colors="red"></span><span class="cursor" data-cursorDisplay="|"
                                data-owner="some-id"></span>
                        </h1>
                        <!-- <h2>Accidental appearances </h2> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod</p> -->
                        <!-- <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                            </div> -->
                        <!-- <a href="#about">
                                <div class="mouse"></div>
                            </a> -->
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
    <!-- </div> -->

    <div id="menu" class="menu-main pd-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2> <br>BRUNCH</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>PLATOS <br> DULCES</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>BEBIDAS CALIENTES</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>BEBIDAS <br> FRIAS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>BEBIDAS FRIAS CON CAFE</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>BEBIDAS CALIENTES SIN CAFE</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2><br> POSTRES</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                        </div>

                        <div class="slider slider-single">

                            <!-- brunch -->
                            <div class="row">
                                <?php if (!empty($products["1"])) : ?>
                                <?php foreach ($products["1"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>


                            <!-- Platos dulces -->
                            <div class="row">
                                <?php if (!empty($products["2"])) : ?>
                                <?php foreach ($products["2"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- bebidas calientes -->
                            <div class="row">
                                <?php if (!empty($products["3"])) : ?>
                                <?php foreach ($products["3"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- bebidas frias -->
                            <div class="row">
                                <?php if (!empty($products["4"])) : ?>
                                <?php foreach ($products["4"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- bebidas frias con cafe -->
                            <div class="row">

                                <?php if (!empty($products["5"])) : ?>
                                <?php foreach ($products["5"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- bebidas calientes sin cafe -->
                            <div class="row">

                                <?php if (!empty($products["6"])) : ?>
                                <?php foreach ($products["6"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- postres -->
                            <div class="row">

                                <?php if (!empty($products["7"])) : ?>
                                <?php foreach ($products["7"] as $key => $value) : ?>
                                <div class="col-xs-6">
                                    <div class="offer-item" style="padding-left: 0px;">
                                        <img src="<?= $value["url_img"] ?>" alt="" width="160" height="200"
                                            style="border-radius: 4px;">
                                        <div>
                                            <h4><?= $value["name"] ?></h4>
                                            <h2>$ <?= $value["price"] ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->

    <div id="footer" class="footer-main">
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="assets/images/logo.png" alt="" height="95" width="95" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <!-- <h3>Acerca de nosotros</h3>
                                <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis
                                    parturient montes.</p> -->
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div id="about" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contactanos</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>Cl. 14 Nte. #9 Norte--105, Cali, Valle del Cauca</span>
                                </p>
                                <!-- <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
                                        +91 80005 89080
                                    </span>
                                </p> -->
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">Latelierducafe22@gmail.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Horarios</h3>

                                <ul>
                                    <li>
                                        <p>Lunes - Viernes </p>
                                        <span> 9:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Sabado - Domingo </p>
                                        <span> 9:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Feriados </p>
                                        <span> 9:00 AM - 8:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>

                    <!-- end footer-in-main -->
                </div>

                <!-- end row -->
            </div>
            <div class="container">
                <!-- <div class="col-xs-12"> -->
                <div class="row">
                    <a href="http://pixju.com" class="col-xs-12 text-warning" target="_blank">
                        <div class="text-center p">Desarrollado por</div>
                        <img style=" display: block; margin-left: auto; margin-right: auto;"
                            src="assets/images/pixju-logo.png" alt="" width="75" height="30">
                    </a>
                </div>
                <!-- </div> -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"></h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>