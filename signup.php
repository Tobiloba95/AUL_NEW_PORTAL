<?php
  //check if the button is clickeed 
  if(isset($_POST['signup'])){
  //echo "btn clicked";


    $servername = "localhost";
    $username = "root";
    $password = "Tobi1234loba*";
    $dbname = "aul_news_portal";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    $adminname=$_POST['adminname'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $password=$_POST['password'];
    



    
    $sql = "INSERT INTO signup(adminname, email, phone_number, password) 
    VALUES ('$adminname', '$email', '$phone_number', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "Connected Successfully";
      header("location: adminlogin.php");
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
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
    <form action="signup.php" method="post">
      <div class="login-box">
        <h1>Sign-up</h1>

        <div class="textbox">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" placeholder="Name" name="adminname" value="" id="adminname">
        </div>

        <div class="textbox">
          <i class="fa fa-mail-bulk" aria-hidden="true"></i>
          <input type="email" placeholder="Email" name="email" value="" id="email">
        </div>

        <div class="textbox">
          <i class="fa fa-phone-alt" aria-hidden="true"></i>
          <input type="phone_number" placeholder="Number" name="phone_number" value="" id="phone_number">
        </div>

        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" placeholder="Password" name="password" value="" id="password" requried>
        </div>


        <input class="button" type="submit" name="signup" value="Sign Up">
        <center><b>Already registered ?</b> <br></b><a href="adminlogin.php">Login here</a></center>

       

        
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