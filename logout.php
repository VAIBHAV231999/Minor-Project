<?php 
session_start();
unset($_SESSION['mm']);
unset($_SESSION['em']);
echo "<script>window.location='../stafflogin.php';</script>";
 ?>