<?php
include "connection.php";
include "functions.php";

$fullname = strtoupper(trim($_POST['fullname']));

$email = trim($_POST['email']);

$username = trim($_POST['username']);

$password = $_POST['password'];


if (!isset($_POST['submit'])) {

    header('location: signup.php?submiterror=Please fill all fields');
} else if (empty($fullname) || empty($email) || empty($username) || empty($password)) {

    header('location: signup.php?fielderror=Please all fields are required');
} else {

    $inserted = false;

    $con = connected();

    $readresult = checkdb($con);

    $row = pg_fetch_assoc($readresult);

    if (empty($row)) {

        insertdb($con, $fullname, $email, $username, $password);

        header("location:index.php?success=Registration Successful");
    } else {

        // echo "Checked next";

        while ($row) {

            if ($row['username'] === $username) {

                header("location:signup.php?usernametaken= Username Not Available");

            break;
               

            } else {

                $inserted = true;

            break;
                
            }
        }
    }
    if ($inserted === true) {

        echo "Worked on it";

        insertdb($con, $fullname, $email, $username, $password);

        header("location:index.php?success=Registration Successful");
    }
}
