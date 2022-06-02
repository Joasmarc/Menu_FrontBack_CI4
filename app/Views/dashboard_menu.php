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
                <div class="text-warning h2 text-center">Menu</div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="product">
                        <div class="reserve-book-btn text-center">
                            <button class="hvr-underline-from-center" value="SEND">Agregar producto</button>
                        </div>
                    </a>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                        <button onclick="show_categories()" class="hvr-underline-from-center" value="SEND">
                            Administrar producto</button>
                    </div>
                </div>

                <div id="container_btn_categories" class="col-xs-12 bg-light"
                    style="border: solid white 5px; border-radius: 4px;" hidden>

                    <?php foreach ($categories as $row => $column) : ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="reserve-book-btn text-center">
                            <a href="category/<?= $column["id"] ?>" class="hvr-underline-from-center btn" value="SEND">
                                <button><?= $column["name_category"] ?></button> </a>
                        </div>
                    </div>
                    <?php endforeach; ?>

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
    <script>
    const show_categories = () => {
        const div_btn_categories = document.getElementById("container_btn_categories");

        if (div_btn_categories.hidden) {
            div_btn_categories.hidden = false;
        } else {
            div_btn_categories.hidden = true;
        }
    }
    </script>
</body>

</html>