<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Catalogo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/cartIcon.png">
        <link rel="apple-touch-icon" href="images/icon.png">

        <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="style.css">

        <!-- Cusom css -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Modernizer js -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Shop Grid</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Shop Grid</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                        <div class="shop__sidebar">
                            <aside class="wedget__categories poroduct--cat">
                                <h3 class="wedget__title">Categoria de Productos</h3>
                                <ul>
                                    <?php
                                    $consultar_catalogo = $conexion->prepare("SELECT * from categoria");
                                    $consultar_catalogo->setFetchMode(PDO::FETCH_ASSOC);
                                    $consultar_catalogo->execute();
                                    while ($categoria = $consultar_catalogo->fetch()) {
                                        ?>
                                        <li><a href="shop-grid.php?categoria=<?php echo $categoria["ID"]; ?>"><?php echo $categoria["Nombre"]; ?></a></li>
                                    <?php }
                                    ?>
<!--                                    <li><a href="shop-grid.php">Frutas <span>(12)</span></a></li>
                    <li><a href="Verdura.html">Verduras <span>(9)</span></a></li>-->

                                </ul>
                            </aside>



                        </div>
                    </div>
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">


                                </div>
                            </div>
                        </div>
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row">
                                    <!-- Start Single Product -->
                                    <?php
                                    $categoria_ID = $_GET["categoria"];
                                    $articulo = $conexion->prepare("SELECT articulos.Nombre as Nombre,articulos.ID as ID,articulos.Precio FROM articulos INNER JOIN categoria ON categoria.ID = articulos.Categoria WHERE categoria.ID = $categoria_ID ");
                                    $articulo->setFetchMode(PDO::FETCH_ASSOC);
                                    $articulo->execute();
                                    while ($articulo_nombre = $articulo->fetch()) {?>
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product__thumb">
                                            <a class="first__img" href="single-product.php"><img src="images\articulos\<?php echo $articulo_nombre["Nombre"]; ?>1.jpg" height="270" width="340"></a>
                                            <a class="second__img animation1" href="single-product.php?articulo=<?php echo $articulo_nombre["ID"]; ?>"><img src="images\articulos\<?php echo $articulo_nombre["Nombre"]; ?>2.jpg" height="270" width="340"></a>

                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.php"><?php echo $articulo_nombre["Nombre"]; ?></a></h4>
                                            <ul class="prize d-flex">
                                                <li>$<?php echo $articulo_nombre["Precio"]; ?></li>

                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <ul class="wn__pagination">
                                    <li class="active"><a href="#">1</a></li>
<!--                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>-->
<!--                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>-->
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Page -->
        <?php
        include 'footer.php';
        ?>
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal__container" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal__header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="big images" src="images/product/big-img/1.jpg">
                                    </div>
                                </div>
                                <!-- end product images -->

                            </div>
                            <!-- //Main wrapper -->

                            <!-- JS Files -->
                            <script src="js/vendor/jquery-3.2.1.min.js"></script>
                            <script src="js/popper.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/plugins.js"></script>
                            <script src="js/active.js"></script>

                            </body>
                            </html>
