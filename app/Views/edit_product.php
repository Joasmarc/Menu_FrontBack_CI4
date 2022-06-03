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
                <div class="text-warning h2 text-center">Agregar Platos</div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                        <a href="category/<?= $product["id_category"] ?>">
                            <button class="hvr-underline-from-center" value="SEND">← Atras</button>
                        </a>
                    </div>
                </div>

                <form id="" method="post" class="reservations-box" action="editProduct" enctype="multipart/form-data">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-warning h3 text-center">Nombre</h2>
                        <div class="form-box">
                            <input type="text" name="name" value="<?= $product["name"] ?>" placeholder="Gina"
                                required="required" data-error="username is required.">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-warning h3 text-center">Precio</h2>
                        <div class="form-box">
                            <input type="number" name="price" value="<?= $product["price"] ?>" placeholder="3000"
                                required="required" data-error="username is required.">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-warning h3 text-center">Categorias</h2>
                        <div class="form-box">
                            <select name="category" id="" required="required">
                                <?php foreach ($categories as $key => $value) : ?>
                                <option value="<?= $product["id_category"] ?>" selected><?= $product["name_category"] ?>
                                </option>
                                <option class="text-uppercase" value="<?= $value["id"] ?>">
                                    <?= $value["name_category"] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-warning h3 text-center">Imagen</h2>
                        <div class="form-box">
                            <input type="file" accept="image/png,image/jpeg,image/jpg" name="image"
                                placeholder="Contraseña" data-error="Password required.">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="validationTextarea"
                            class="form-label text-warning h3 text-center">Descripcion</label>
                        <textarea name="description" class="form-control is-invalid" id="validationTextarea"
                            placeholder="Required example textarea" rows="5"><?= $product["description"] ?></textarea>
                        <div class="invalid-feedback">
                            Informacion a adicional a mostrar sobre este plato.
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-warning h3 text-center">Visibilidad</h2>
                        <div class="form-box">
                            <select name="is_visible" id="" required>
                                <option class="text-uppercase" value="1" selected>Visible
                                </option>
                                <option class="text-uppercase" value="0">Oculto
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="reserve-book-btn text-center">
                            <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Actualizar
                                plato</button>
                        </div>
                    </div>
                    <!-- end col -->
                </form>
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