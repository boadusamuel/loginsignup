<?php
include_once "connection.php";
include_once "functions.php";

$username = trim($_POST['username']);
$password = $_POST['password'];



if (!isset($_POST['submit'])) {

    header("location: index.php");
} else if (empty($username) || empty($password)) {

    header("location: index.php?fillerror=Please fill all fields");
} else {
    $con = connected();

    $readresult = checkdb($con);


    if (pg_num_rows($readresult) > 0) {

        while ($row = pg_fetch_assoc($readresult)) {

            if ($row['username'] === $username && $row['password'] === $password) {

                header("location: welcome.php?username=$checkname");
            } else {

                header("location: index.php?loginerror=Wrong Username or Passowrd");
            }
        }
    }
}
