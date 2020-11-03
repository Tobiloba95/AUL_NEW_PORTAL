<?php 
session_start();

$name = "Guest";
if(isset($_SESSION['adminname'])){
  $name = $_SESSION['adminname'];
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
    <script type="text/javascript" src="js/test.js"></script>
    <title>AUL_new_portal</title>
  </head>
  <body>
    <div class="body">
    <table id="up">
      <tbody>
        <tr>
          <td>
            <h1><a href="home.php" title="AUL, news portal">AUL</a></h1>
            Welcome,
            <b><?php echo $name?></b>
            :
            <a href="signup.php">Join AUL_News_portal</a>
            /
            <b><a href="adminlogin.php">LOGIN!</a></b>
            /
            <a href="trending.php">Trending</a>
            /
            <a href="recent.php">Recent</a>
            /
            <a href="topic.php">New</a>
            <br>
            <div id="time"></div> 
            <!-- <form>
              <input type="button" value="Date" onclick="Clock()" />
            </form>    -->         
            <b><a href="adminlogout.php">LOGOUT!</a></b>
            <p></p>
            <form action="search.php">
              <input type="text" name="question" size="32">
              <input type="submit" name="search" value="search">
            </form>
          </td>
        </tr>
      </tbody>
    </table> 
    <a name="top"></a>
    <table class="boards">
      <tbody>
        <tr>
          <th>
            <h3>AUL FORUMS</h3>
          </th>
        </tr>
        <tr>
          <td class="l w">
            <a href=""><b>AUL / General</b></a>
            :
            <a href="upload.new"></a>
          </td>
        </tr>

      </tbody>
    </table>
    </div>

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