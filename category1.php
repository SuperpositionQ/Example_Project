<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sound</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	

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

	<!-- Category section -->
	<section class="category-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Live Concert Playlist</h2>
			</div>
			<div class="container">
				<div class="category-links">
					<a href="" class="active">Genres</a>
					<a href="">Artists</a>
					<a href="">All Playlist</a>
				</div>
			</div>
			<div class="category-items">
				<div class="row">
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/9.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/2.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/7.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

	<!-- Songs section  -->
	<section class="songs-section">
		<div class="container">
		<?php
                            include("connectivity.php");
                            $query =  "Select * from tbl_music";
                            $result =  mysqli_query($connection, $query);

                            foreach ($result as $row) {
								echo "<div class='song-item'>
								<div class='row'>
									
									<div class='col-lg-4'>
										<div class='song-info-box'>
										<div class='song-info'>
												<h4>Artist Name: $row[music_artist]</h4>
												<p>Music Name: $row[music_name]</p>
											</div>
										</div>
									</div>
									
									<div class='col-lg-6'>
										<div class='single_player_container'>
											<div class='single_player'>
												<div class='jp-jplayer jplayer' data-ancestor='.jp_container_1' data-url='music-files/1.mp3'></div>
												<div class='jp-audio jp_container_1' role='application' aria-label='media player'>
													<div class='jp-gui jp-interface'>
				
														<!-- Player Controls -->
														<div class='player_controls_box'>
															<button class='jp-prev player_button' tabindex='0'></button>
															<button class='jp-play player_button' tabindex='0'></button>
															<button class='jp-next player_button' tabindex='0'></button>
															<button class='jp-stop player_button' tabindex='0'></button>
														</div>
														<!-- Progress Bar -->
														<div class='player_bars'>
															<div class='jp-progress'>
																<div class='jp-seek-bar'>
																	<div>
																		<div class='jp-play-bar'><div class='jp-current-time' role='timer' aria-label='time'>0:00</div></div>
																	</div>
																</div>
															</div>
															<div class='jp-duration ml-auto' role='timer' aria-label='duration'>00:00</div>
														</div>
													</div>
													<div class='jp-no-solution'>
														<span>Update Required</span>
														To play the media you will need to either update your browser to a recent version or update your <a href='http://get.adobe.com/flashplayer/' target='_blank'>Flash plugin</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='col-lg-2'>
										<div class='songs-links'>
											<a href=''><img src='img/icons/p-1.png' alt=''></a>
											<a href=''><img src='img/icons/p-2.png' alt=''></a>
											<a href=''><img src='img/icons/p-3.png' alt=''></a>
										</div>
									</div>
								</div>
							</div>";
                            }

                            ?>
		</div>
	</section>
	<!-- Songs section end -->

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

	<!-- Audio Player and Initialization -->
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jplayerInit.js"></script>

	</body>
</html>