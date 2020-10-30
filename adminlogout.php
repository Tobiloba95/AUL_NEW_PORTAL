<?php
session_start();
unset($_SESSION["adminname"]);
unset($_SESSION["passwod"]);
header("Location:adminlogin.php");
?>