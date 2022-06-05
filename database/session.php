<?php
  session_start();
  include "db.php";
  $username=$_SESSION['username'];
  $userid = $_SESSION['user_Id'];

    if (isset($_SESSION['username'])&&$_SESSION['username']!=""){

    }else{
        header("Location:../index.php");
    }
?>