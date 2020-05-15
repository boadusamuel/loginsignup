<?php

$username = trim($_POST['username']);
$password = $_POST['password'];



if (!isset($_POST['submit'])) {

    header("location: index.php");
} else if (empty($username) || empty($password)) {

    header("location: index.php?fillerror=Please fill all fields");
} else {

    $file = fopen("users.txt", "r+");


    while (!feof($file)) {

        $line = fgets($file);

        $check = explode(":", $line);
        
      

        if ($check[0] == $username && $check[1] == $password) {

            $checked = $check[0];

            $checkname = $check[2];
        }
    }

    $checked == $username ? header("location: welcome.php?username=$checkname") : header("location: index.php?loginerror=Wrong Username or Passowrd");


    fclose($file);
}
