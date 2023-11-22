<?php
session_start();
unset($_SESSION['$getUser_name']);
header('location:../login.php');
?>