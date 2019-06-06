<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Carrito de Compras</title>
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
            <div class="ht__bradcaump__area bg-image--3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">


                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- cart-main-area start -->
            <div class="cart-main-area section-padding--lg bg--white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ol-lg-12">
                            <form action="#">               
                                <div class="table-content wnro__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr class="title-top">
                                                <th class="product-thumbnail">Imagen</th>
                                                <th class="product-name">Producto</th>
                                                <th class="product-price">Precio</th>
                                                <th class="product-quantity">Cantidad</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt="product img"></a></td>
                                                <td class="product-name"><a href="#">Sandia</a></td>
                                                <td class="product-price"><span class="amount">$4.00</span></td>
                                                <td class="product-quantity"><input type="number" value="2"></td>
                                                <td class="product-subtotal">$8.00</td>
                                                <td class="product-remove"><a href="#">X</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/2.jpg" alt="product img"></a></td>
                                                <td class="product-name"><a href="#">Papaya</a></td>
                                                <td class="product-price"><span class="amount">$4.50</span></td>
                                                <td class="product-quantity"><input type="number" value="4"></td>
                                                <td class="product-subtotal">$18.00</td>
                                                <td class="product-remove"><a href="#">X</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/3.jpg" alt="product img"></a></td>
                                                <td class="product-name"><a href="#">Mango</a></td>
                                                <td class="product-price"><span class="amount">$3.00</span></td>
                                                <td class="product-quantity"><input type="number" value="3"></td>
                                                <td class="product-subtotal">$9.00</td>
                                                <td class="product-remove"><a href="#">X</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form> 
                            <div class="cartbox__btn">
                                <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                    <li><a href="#">actualizar Carrito</a></li>
                                    <li><a href="#">Pagar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="cartbox__total__area">
                                <div class="cartbox-total d-flex justify-content-between">
                                    <ul class="cart__total__list">
                                        <li>Total de Compra</li>
                                        <li>Delivery</li>
                                    </ul>
                                    <ul class="cart__total__tk">
                                        <li>$70</li>
                                        <li>$70</li>
                                    </ul>
                                </div>
                                <div class="cart__total__amount">
                                    <span>Total a Pagar</span>
                                    <span>$140</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- cart-main-area end -->
            <?php
                include 'footer.php';
            ?>
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
