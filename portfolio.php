<?php 
    session_start();
    include('dbh.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>MDPhoto</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" type="image/png" href="assets/img/logo_icon.png">
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href="#">
                    <img src="assets/img/logo.png" alt="cocoon">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="about.html">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="services.html">
                            Services
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <!--main menu end -->

            <!--filter menu-->
            <div class="side_menu_section">
                <h4 class="side_title">filter by:</h4>
                <ul id="filtr-container" class="filter_nav">
                    <li data-filter="*" class="active"><a href="javascript:void(0)">all</a></li>
                    <li data-filter=".travel" class=""> <a href="javascript:void(0)">travel</a></li>
                    <li data-filter=".casual" class=""><a href="javascript:void(0)">casual</a></li>
                    <li data-filter=".wedding" class=""><a href="javascript:void(0)">wedding</a></li>
                    <li data-filter=".childhood"><a href="javascript:void(0)">childhood</a></li>
                </ul>
            </div>
            <!--filter menu end-->

            <!--language menu -->
            <div class="side_menu_section">
                <h4 class="side_title">language preferance:</h4>
                <ul class="menu_nav">
                    <li class="active"><a href="#">English</a></li>
                    <li><a href="portfolio_ro.php">Română</a></li>
                </ul>
            </div>
            <!--language menu end -->

            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">
                    <ul class="social_menu">
                        <li>
                            <a href="#"> <i class="ion ion-social-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-instagram"></i> </a>
                        </li>
                    </ul>
                    <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <!--=================== filter portfolio start====================-->
            <div class="portfolio gutters grid img-container">
                <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>

                <?php
                    $sql="SELECT * FROM photo_portfolio";
                    $result=$conn->query($sql);
                    if($result->num_rows > 0) {
                    //output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "
                            <div class='grid-item ".$row['category']." col-sm-12 col-md-6 col-lg-3'>
                                <a href=".$row['source']." title=".$row['category'].">
                                <div class='project_box_one'>
                                    <img src=".$row['source_square']." alt='pro1' />
                                    <div class='product_info'>
                                        <div class='product_info_text'>
                                            <div class='product_info_text_inner'>
                                                <i class='ion ion-plus'></i>
                                                <h4>".$row['category']."</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>";
                        }
                    } else {
                        echo "";
                    }
                    $conn->close();
                ?>
<!--
                    
                <div class="grid-item   casual design col-sm-12 col-md-6 col-lg-3">
                        <a href="assets/img/portfolio/a10.png" title="casual">
                            <div class="project_box_one">
                                <img src="assets/img/portfolio/p_a10.png" alt="pro1" />
                                <div class="product_info">
                                    <div class="product_info_text">
                                        <div class="product_info_text_inner">
                                            <i class="ion ion-plus"></i>
                                            <h4>casual</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                -->
                </div>
            <!--=================== filter portfolio end====================-->
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>



<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/slick.min.js"></script>
<!--Portfolio Filter-->
<script src="assets/js/imgloaded.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>