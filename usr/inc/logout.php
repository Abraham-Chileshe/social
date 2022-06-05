<?php

  include "../../database/db.php";

  session_start();
  $username=$_SESSION['username'];
  $userid = $_SESSION['user_Id'];


  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
        session_destroy();
        header("Location:../../index.php");
  }else{

  }

  

?>