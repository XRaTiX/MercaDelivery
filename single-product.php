<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop-Single | Bookshop Responsive Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico">
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
            <div class="ht__bradcaump__area bg-image--4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Shop Single</h2>
                                <nav class="bradcaump-content">
                                    <a class="breadcrumb_item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb_item active">Shop Single</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start main Content -->
            <div class="maincontent bg--white pt--80 pb--55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="wn__single__product">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="wn__fotorama__wrapper">
                                            <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                                <a href="1.jpg"><img src="images/product/1.jpg" alt=""></a>
                                                <!--<a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="product__info__main">
                                            <h1>Tomate</h1>
                                            <div class="price-box">
                                                <span>$1.00</span>
                                            </div>
                                            <div class="product__overview">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>

                                            </div>
                                            <div class="box-tocart d-flex">
                                                <span>Cantidad</span>
                                                <input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
                                                <div class="addtocart__actions">
                                                    <button class="tocart" type="submit" title="Add to Cart">Añadir al carrito</button>
                                                </div>
                                            </div>
                                            <div class="product_meta">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__info__detailed">
                                <div class="pro_details_nav nav justify-content-start" role="tablist">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Detalles</a>
                                </div>
                                <div class="tab__container">
                                    <!-- Start Single Tab Content -->
                                    <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                        <div class="description__attribute">
                                            <p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
                                            <ul>
                                                <li>• Two-tone gray heather hoodie.</li>
                                                <li>• Drawstring-adjustable hood. </li>
                                                <li>• Machine wash/dry.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Single Tab Content -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                            <div class="shop__sidebar">
                                <aside class="wedget__categories poroduct--cat">
                                    <h3 class="wedget__title">Product Categories</h3>
                                    <ul>
                                        <li><a href="#">Frutas <span>(3)</span></a></li>
                                        <li><a href="#">Verduras <span>(4)</span></a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main Content -->
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
                                    <div class="product-info">
                                        <h1>Simple Fabric Bags</h1>
                                        <div class="rating__and__review">
                                            <ul class="rating">
                                                <li><span class="ti-star"></span></li>
                                                <li><span class="ti-star"></span></li>
                                                <li><span class="ti-star"></span></li>
                                                <li><span class="ti-star"></span></li>
                                                <li><span class="ti-star"></span></li>
                                            </ul>
                                            <div class="review">
                                                <a href="#">4 customer reviews</a>
                                            </div>
                                        </div>
                                        <div class="price-box-3">
                                            <div class="s-price-box">
                                                <span class="new-price">$17.20</span>
                                                <span class="old-price">$45.00</span>
                                            </div>
                                        </div>
                                        <div class="quick-desc">
                                            Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                        </div>
                                        <div class="select__color">
                                            <h2>Select color</h2>
                                            <ul class="color__list">
                                                <li class="red"><a title="Red" href="#">Red</a></li>
                                                <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                                <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                                <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                            </ul>
                                        </div>
                                        <div class="select__size">
                                            <h2>Select size</h2>
                                            <ul class="color__list">
                                                <li class="l__size"><a title="L" href="#">L</a></li>
                                                <li class="m__size"><a title="M" href="#">M</a></li>
                                                <li class="s__size"><a title="S" href="#">S</a></li>
                                                <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                                <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                        <div class="social-sharing">
                                            <div class="widget widget_socialsharing_widget">
                                                <h3 class="widget-title-modal">Share this product</h3>
                                                <ul class="social__net social__net--2 d-flex justify-content-start">
                                                    <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                                    <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                    <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                    <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="addtocart-btn">
                                            <a href="#">Add to cart</a>
                                        </div>
                                    </div><!-- .product-info -->
                                </div><!-- .modal-product -->
                            </div><!-- .modal-body -->
                        </div><!-- .modal-content -->
                    </div><!-- .modal-dialog -->
                </div>
                <!-- END Modal -->
            </div>
            <!-- END QUICKVIEW PRODUCT -->

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