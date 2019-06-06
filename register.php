<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cuenta de Usuario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/icons/cartIcon.png">
        <link rel="apple-touch-icon" href="images/icon.png">

        <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

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
                                <h2 class="bradcaump-title">My Account</h2>
                                <nav class="bradcaump-content">
                                    <a class="breadcrumb_item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb_item active">My Account</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start My Account Area -->
            <section class="my_account_area pt--80 pb--55 bg--white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="my__account__wrapper">
                                <h3 class="account__title">Crear una Cuenta</h3>
                                <form action="proceso-crear.php" method="GET">
                                    <div class="account__form">
                                        <div class="input__box">
                                            <label>Correo Electronico</label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="input__box">
                                            <label>Password<span>*</span></label>
                                            <input type="password" name="pass" required>
                                        </div>
                                        <div class="form__btn">
                                            <input type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End My Account Area -->
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