<?php

   include 'connect.php';
   setcookie('tutor_id', '', time() - 1, '/');
   
   session_unset();
   session_destroy();
   header('location:../admin/login.php');

?>