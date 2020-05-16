<?php
include "connection.php";
include "functions.php";

$username = trim($_POST['username']);
$password = $_POST['password'];



if (!isset($_POST['submit'])) {

    header("location: index.php");
} else if (empty($username) || empty($password)) {

    header("location: index.php?fillerror=Please fill all fields");
} else {
    $con = connected();

    $readresult = checkdb($con);


        while ($row = pg_fetch_assoc($readresult)) {

            if ($row['username'] === $username && $row['password'] === $password) {

                header("location: welcome.php?username=".$row['fullname']."");
            } else {

                header("location: index.php?loginerror=Wrong Username or Passowrd");
            }
        
    }
}
