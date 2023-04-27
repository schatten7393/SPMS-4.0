<?php
include "connetion.php";
$error_msg = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $len ="";
    if(strlen($username)==7)$len = 'student';
    else $len = 'employee';
    $id = $len."ID";
    $sql = "SELECT * FROM $len WHERE $id='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql2 = "INSERT INTO `curr_user` (`userID`) VALUES ($username);";
        mysqli_query($conn, $sql2);
        header("Location: $len/index.php");
        exit();
    } else {
        $error_msg = 'Invalid user information. Please try again.';
    }
    mysqli_close($conn);
}
