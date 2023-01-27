<?php

session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin']!=true){
    header("location:adminlogin.php");
    exit;}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sound</title>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords" content="music, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

    <!-- Header section -->
    <header class="header-section clearfix">
        <a href="index.php" class="site-logo">
            <!-- <img src="img/logo.png" alt=""> -->
            <h2 style="color: WHITE;">SOUND</h2>
        </a>
        <div class="header-right">
            <a href="Login.php" class="hr-btn">User Login</a>
            <span>|</span>
            <div class="user-panel">
                <a href="adminlogin.php" class="login">Admin Login</a>
                <a href="adminlogout.php" class="register">Logout</a>
            </div>
        </div>
        <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="category1.php">Category</a></li>
                    <li><a href="playlist.php">Playlist</a></li>
                    <li><a href="artist.php">Artist</a></li>
                    <li><a href="dasboard.php">Dashboard</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </li>
            <li><a href="dasboard.php">Dashboard</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>
    <!-- Header section end -->

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li><a href="dasboard.php"><i class="fa fa-lock" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Admin Table</span></a></li>
                        <li><a href="User.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">User Table</span></a></li>
                        <li><a href="category.php"><i class="fa fa-bars" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Category Table</span></a></li>
                        <li><a href="music.php"><i class="fa fa-music" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Music Table</span></a></li>
                        <li><a href="video.php"><i class="fa fa-camera" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Video Table</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <div class="mainsec">
                        
                        <div class="mainsection" >
                            <h2 style="text-align:Center; font-size: 30px;">Add Category</h2> <br><br>
                            <form method="post">
                                <!-- <input type="number" name="textid" placeholder="Enter Your Id"><br><br> -->
                                <input type="text" name="catname" placeholder="Enter Category"><br><br>
                                <input type="date" name="catyear" placeholder="Enter Year"><br><br>
                                <input type="text" name="catartist" placeholder="Enter Artist Name"><br><br>
                                <input type="text" name="catsong" placeholder="Enter Song"><br><br>
                                <input type="text" name="catalbum" placeholder="Enter Album"><br><br>
                                <input type="file" name="catfile" placeholder="Insert File"><br><br>
                               <input type="submit" value="submit" name="btninsert">
                            </form>
                        </div>
                        <?php
                        if (isset($_POST['btninsert'])) {
                            // $id = $_POST['textid'];
                            $name = $_POST['catname'];
                            $year = $_POST['catyear'];
                            $artist = $_POST['catartist'];
                            $song = $_POST['catsong'];
                            $album = $_POST['catalbum'];
                            $file = $_POST['catfile'];

                            include("connectivity.php");
                            $query = "INSERT INTO tbl_Category (category_select,category_year,category_artist,song_name,category_album,add_file) VALUES ('$name','$year','$artist','$song','$album','$file')";
                            $result = mysqli_query($connection, $query);

                            if ($result) {
                                echo "<script>alert('Category Inserted')</script>";
                            }
                        }



                        ?>



                    </div>
                </div>
                <!-- <div class="user-dashboard">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                        <h1>My World</h1>
                        

                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 order-lg-2">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-widget">
                                <h2>About us</h2>
                                <ul>
                                    <li><a href="">Our Story</a></li>
                                    <li><a href="">Sound Blog</a></li>
                                    <li><a href="">History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-widget">
                                <h2>Products</h2>
                                <ul>
                                    <li><a href="">Music</a></li>
                                    <li><a href="">Subscription</a></li>
                                    <li><a href="">Custom Music</a></li>
                                    <li><a href="">Footage</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-widget">
                                <h2>Playlists</h2>
                                <ul>
                                    <li><a href="">Newsletter</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Press</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 order-lg-1">
                    <!-- <img src="img/logo.png" alt=""> -->
                    <h3 style="color: white; margin-left: 20%;">SOUND</h3>
                    <div class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | by SOUND group</a></div>
                    <div class="social-links" style="margin-left: 10%;">
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>