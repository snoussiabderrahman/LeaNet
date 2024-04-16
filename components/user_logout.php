<?php

   include 'connect.php';
   setcookie('user_id', '', time() - 1, '/');

   session_unset();
   session_destroy();
   header('location:../home.php');

?>