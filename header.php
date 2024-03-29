<?php
session_start();
include 'conexion.php';
?>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
    <header id="wn__header" class="header__area header__absolute sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo/MercaDeliveryTransparente.png" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="mainmenu__nav">
                        <ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="index.php">Home</a></li>
                            <li class="drop"><a href="#">Catalogo</a>
                                <div class="megamenu mega03">
                                    <ul class="item item03">
                                        <!--<li class="title">Catalogo</li>-->
                                        <?php
                                            $consultar_catalogo = $conexion->prepare("SELECT * from categoria");
                                            $consultar_catalogo->setFetchMode(PDO::FETCH_ASSOC);
                                            $consultar_catalogo->execute();
                                            while($categoria = $consultar_catalogo->fetch()){?>
                                                <li><a href="shop-grid.php?categoria=<?php echo $categoria["ID"];?>"><?php echo $categoria["Nombre"]; ?></a></li>
                                            <?php
                                            }?>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <li class="shop_search"><a class="search__active" href="#"></a></li>
                        <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
                            <!-- Start Shopping Cart -->
                            <div class="block-minicart minicart__active">
                                <div class="minicart-content-wrapper">
                                    <div class="micart__close">
                                        <span>Cerrar</span>
                                    </div>
                                    <div class="items-total d-flex justify-content-between">
                                        <span>3 productos</span>
                                        <span>Subtotal</span>
                                    </div>
                                    <div class="total_amount text-right">
                                        <span>$66.00</span>
                                    </div>
                                    <div class="mini_action checkout">
                                        <a class="checkout__btn" href="cart.php">Ir al Pago</a>
                                    </div>
                                    <div class="single__items">
                                        <div class="miniproduct">
                                            <div class="item01 d-flex">
                                                <div class="thumb">
                                                    <a href="product-details.php"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="product-details.php">Platano</a></h6>
                                                    <span class="prize">$3.00</span>
                                                    <div class="product_prize d-flex justify-content-between">
                                                        <span class="qun">Cantidad: 01</span>
                                                        <ul class="d-flex justify-content-end">
                                                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item01 d-flex mt--20">
                                                <div class="thumb">
                                                    <a href="product-details.php"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="product-details.php">Manzana</a></h6>
                                                    <span class="prize">$0.75</span>
                                                    <div class="product_prize d-flex justify-content-between">
                                                        <span class="qun">Cantidad: 03</span>
                                                        <ul class="d-flex justify-content-end">
                                                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item01 d-flex mt--20">
                                                <div class="thumb">
                                                    <a href="product-details.html"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="product-details.html">Peras</a></h6>
                                                    <span class="prize">$0.85</span>
                                                    <div class="product_prize d-flex justify-content-between">
                                                        <span class="qun">Cantidad: 01</span>
                                                        <ul class="d-flex justify-content-end">
                                                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_action cart">
                                        <a class="cart__btn" href="cart.php">Ver y Editar Carrito</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Shopping Cart -->
                        </li>
                        <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                            <div class="searchbar__content setting__block">
                                <div class="content-inner">
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Perfil</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <?php if (isset($_SESSION["Correo"])) { ?>
                                                        <span><a href="#">Mi cuenta</a></span>
                                                        <span><a href="#">Ordenes</a></span>
                                                        <span><a href="signout.php">Salir</a></span>
                                                    <?php } else { ?>
                                                        <span><a href="login.php">Iniciar Sesion</a></span>
                                                        <span><a href="register.php">Crear una Cuenta</a></span>
                                                        <?php
                                                    }
                                                    ?>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="row d-none">
                <div class="col-lg-12 d-none">
                    <nav class="mobilemenu__nav">
                        <ul class="meninmenu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Catalogo</a>
                                <ul>
                                    <?php
                                            $consultar_catalogo = $conexion->prepare("SELECT * from categoria");
                                            $consultar_catalogo->setFetchMode(PDO::FETCH_ASSOC);
                                            $consultar_catalogo->execute();
                                            while($categoria = $consultar_catalogo->fetch()){?>
                                                <li><a href="shop-grid.php?categoria=<?php echo $categoria["ID"];?>"><?php echo $categoria["Nombre"]; ?></a></li>
                                            <?php
                                            }?>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
            </div>
            <!-- Mobile Menu -->	
        </div>		
    </header>
    <!-- //Header -->
    <!-- Start Search Popup -->
    <div class="brown--color box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Que quiere buscar?">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>Cerrar</span>
        </div>
    </div>
    <!-- End Search Popup -->