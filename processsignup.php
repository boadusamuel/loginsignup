<?php
include_once "connection.php";
include_once "functions.php";

$fullname = strtoupper(trim($_POST['fullname']));

$email = trim($_POST['email']);

$username = trim($_POST['username']);

$password = $_POST['password'];


if (!isset($_POST['submit'])) {

    header('location: signup.php?submiterror=Please fill all fields');
} else if (empty($fullname) || empty($email) || empty($username) || empty($password)) {

    header('location: signup.php?fielderror=Please all fields are required');
} else {

    $con = connected();

    $readresult = checkdb($con);


    if (pg_num_rows($readresult) > 0) {

        while ($row = pg_fetch_assoc($readresult)) {

            if ($row['username'] === $username) {

                header("location:signup.php?usernametaken= Username Not Available");
            } else {

                insertdb($con, $fullname, $email, $username, $password);

                header("location:index.php?success=Registration Successful");
            }
        }
    }
}
