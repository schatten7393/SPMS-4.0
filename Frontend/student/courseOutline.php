<?php 
                  function showCourseOutline(){
                     include "connetion.php";
                     $error_msg = '';
                     if (isset($_POST['submit'])) {
                     $username = $_POST['course'];
                     echo $username;
                     }
                  }
                  ?>