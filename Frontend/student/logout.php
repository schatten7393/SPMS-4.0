<?php

   include 'connetion.php';
   $sql = "TRUNCATE `curr_user`;";
   mysqli_query($conn, $sql);
   header("Location: ../employee/index.php");

?>