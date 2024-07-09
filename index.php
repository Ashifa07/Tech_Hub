li<!DOCTYPE html>
<html lang="en">
<a?php
include("connection/connect.php");
error_reporting(0);
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <meta name="description" content="">
    <meta name="author"content="">
    <link rel="icon" href="#">
    <title>Home || Online shop IT Ordering System - Code Camp BD</title>
    <link href="css/bootsrap.min.css" rel="stylesheet">
    <link href="css/font.awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="home">
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                
                    <button class="navbar-toggler hideen-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"><img class="img-rounded" src </a>
                <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                <ul class="nav-item">
                <li class="nav-item"> 
                    <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <!-- PHP untuk menampilkan menu login/registrasi atau langsung logout/my orders tergantung status login -->
                <?php
                if(empty($_SESSION["user_id"])) // jika pengguna belum login
                {
                    echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                          <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                }
                else
                {
                    echo'<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                    echo'<li class="nav-item"><a hrsef="logout.php" class="nav-link active">Logout</a> </li>';
                }
                ?>
                </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class="hero bg-image" data-image-src="img/Black Modern Futuristic Jamboard Background (1).jpg">
        <div class="hero-inner">
            <div class="container text-center hero-text font white">
                <h1>Order Delivery & Take-Out</h1>
                <div class="banner-form">
                    <form class="form-inline">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php" ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>

</body>
</html>