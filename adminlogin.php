<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
	<link rel="stylesheet" href="css/Signup.css">
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

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
                <a href="" class="register">Logout</a>
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
<div class="body">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Admin Register</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<input type="text" placeholder="Name" name="admin_name" required/>
			<input type="email" placeholder="Email" name="admin_email" required/>
			<input type="tel" placeholder="phone" name="admin_phone" required/>
			<input type="password" placeholder="Password" name="admin_password" required/>
			<button name="btnreg">Sign Up</button>
		</form>
	</div>
  <?php
  

  if(isset($_POST['btnreg']))
  {
    $adminnamed = $_POST['admin_name'];
    $address = $_POST['admin_address'];
    $email = $_POST['admin_email'];
    $phone = $_POST['admin_phone'];
    $adminpassword = $_POST['admin_password'];

    $connection = mysqli_connect("localhost","root","","db_sound");
    $query = "INSERT INTO tbl_admin VALUES ('','$adminnamed','$phone','$email','$adminpassword')";
   $result =  mysqli_query($connection,$query);

  }

  if($result)
  {
    echo "<script> alert('Register successfully')</script>";
  }

   ?>

	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Login Admin</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Admin Name" name="admin_name" required/>
			<input type="password" placeholder="Password" name="admin_password" required/>
			<a href="#">Forgot your password?</a>
			<button name="btnlogin">Login</button>
			
		</form>
	</div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST['btnlogin']))
  {
    $adminname = $_POST['admin_name'];
    $adminpass = $_POST['admin_password'];

    $connection = mysqli_connect("localhost","root","","db_sound");
    $query = "SELECT * FROM tbl_admin WHERE name = '$adminname' and pass = '$adminpass'";
    $result = mysqli_query($connection,$query);
    if (mysqli_num_rows($result))
    {
      $_SESSION['admin'] = true;
      $_SESSION['loggedin'] = true;
      $_SESSION['myadmin'] =  $adminname;
      header("location:dasboard.php");
    }
    else
    {
      echo  "<script> alert('Incorrect')</script>";
    }
   
  }
}

 ?>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>


<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>