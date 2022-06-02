<?= $this->include('partials/header') ?>

<body background="assets/images/642b74e35250816a878a3aefb6848a81.jpg">
    <div id="loader">
        <div id="status"></div>
    </div>

    <?= $this->include('partials/navbar') ?>

    <!-- end site-header -->

    <!-- ini center page -->
    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="text-warning h2 text-center">Panel de inicio</div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                        <a href="menu">
                            <button class="hvr-underline-from-center" value="SEND" id="submit">Administracion de
                                Menu</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                        <button class="hvr-underline-from-center" value="SEND" id="submit">Almacen de imagenes</button>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                        <button class="hvr-underline-from-center" value="SEND" id="submit">Buzon de comentarios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end center page -->

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
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
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
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- personal -->
    <script src="assets/js/script.js"></script>
</body>

</html>