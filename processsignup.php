<?php

$fullname = strtoupper(trim($_POST['fullname']));

$email = trim($_POST['email']);

$username = trim($_POST['username']);

$password = $_POST['password'];


if (!isset($_POST['submit'])) {

    header('location: signup.php?submiterror=Please fill all fields');
} else if (empty($fullname) || empty($email) || empty($username) || empty($password)) {

    header('location: signup.php?fielderror=Please all fields are required');
} else {

    $data = $username . ":" . $password . ":" . $fullname . ":" . $email . "\n";


    $file = fopen("users.txt", "a+");

    $checked = "";

    while (!feof($file)) {

        $line = fgets($file, filesize("users.txt"));

        $check = explode(":", $line);

        if ($check[0] == $username) {

            $checked = $username;
        }
    }

    if (!empty($checked)) {

        header("location:signup.php?usernametaken= Username Already Available");
    } else {

        fwrite($file, "$data");

        header("location:index.php?success=Registration Successful");
    }

    fclose($file);
}
