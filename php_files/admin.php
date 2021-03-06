<?php 
    session_start();
    include('dbh.php');

    //$email = $_SESSION['email'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/admin_chat.css" type="text/css">  
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
                    <li  class="active">
                        <a href="admin.php">
                           Home admin
                        </a>
                    </li>
                </ul>
            </div>
            <!--main menu end -->

            <!--admin options menu-->
            <div class="side_menu_section">
                <h4 class="side_title">Options:</h4>
                <ul class="menu_nav">
                    <li><a href="add_photos.php">Add photos</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!--admin options menu end-->

            <!--language menu -->
            <div class="side_menu_section">
                <h4 class="side_title">language preferance:</h4>
                <ul class="menu_nav">
                    <li class="active"><a href="#">English</a></li>
                    <li><a href="admin_ro.php">Română</a></li>
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
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <form action="change_chat.php" method="post">
                                        <div class="col-lg-6 col-12" style="float:left;"> 
                                            <input class="form-control" type="text" placeholder="Email" name="email">
                                        </div>
                                        <button class="btn btn-primary-outline col-lg-6 col-12" type="submit">Chat</button>
                                    </form>
                                    <br><h4>List of users</h4><br>
                                    <?php
                                        $sql="SELECT * FROM users";
                                        $result=$conn->query($sql);
                                        if($result->num_rows > 0) {
                                        //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                if($row['email']!="mdphoto@contact.com"){ 
                                                    echo "<p>".$row['first_name']." ".$row['last_name']." ---> ".$row['email']."</p>";
                                                }
                                            }
                                        }
                                        $conn->close();
                                    ?>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                                    
                        <div class="col-md-6 col-5 img_section" style="background-image: url('assets/img/bg/chat.png');"></div>
                    </div>
                </div>
            </div>
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
<!--map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuahgsm_qfH1F3iywCKzZNMdgsCfnjuUA"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>