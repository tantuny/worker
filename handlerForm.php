<?php
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  if($login == "admin" and $pass == "123456"){
    echo "Access is allowed for ADMIN";
  }else if($login == "user" and $pass = "654321"){
    echo "Access is allowed for USER";
  }else{
    echo "Access denied";
  }
  
?>