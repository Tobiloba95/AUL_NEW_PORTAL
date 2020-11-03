<?php
session_start();

if (isset($_SESSION["adminname"]) && isset($_SESSION["loggedIn"])){
	header("Location: home.php");
	exit();
}

if (isset($_POST['login'])){
	$connection= new mysqli("localhost", "root","", "aul_news_portal");

	$adminname = $connection->real_escape_string($_POST["adminname"]);
	$password = sha1($connection->real_escape_string($_POST["password"]));
	$data= $connection->query("SELECT * FROM adminlogin WHERE adminname='$adminname' ");
	
	if ($data->num_rows > 0){
		$_SESSION["adminname"] = $adminname;
		$_SESSION["loggedIn"] = 1;

		
		header('Location: home.php');
		exit();
  }
  else{
		echo "incorrect";
	}



}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" >
    <link rel="stylesheet" href="fontawesome/css/brands.css" >
    <link rel="stylesheet" href="fontawesome/css/solid.css" >
    <link rel="stylesheet" href="style.css">
    <title>AUL_new_portal</title>
  </head>
  <body>
    <form action="adminlogin.php" method="post">
      <div class="login-box">
        <h1>Login</h1>

        <div class="textbox">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" placeholder="Name" name="adminname" value="">
        </div>

        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" placeholder="Password" name="password" value="">
        </div>

        <div class="contact100-form-checkbox">
          <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
          <label class="label-checkbox100" for="ckb1">
            Remember me
         </label>
        </div>

        <input class="button" type="submit" name="login" value="Sign In">

        <div class="text-center p-t-90">
          <a class="txt1" href="forget.php">
            Forgot Password?
          </a>
        </div>
        

        
      </div>
    
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
