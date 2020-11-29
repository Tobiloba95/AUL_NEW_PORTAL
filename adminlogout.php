<?php
session_start();
unset($_SESSION["adminname"]);
unset($_SESSION["password"]);
header("Location:adminlogin.php");
?>