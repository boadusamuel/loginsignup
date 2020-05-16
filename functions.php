<?php

function inputElement(string $type, string $name, string $placeholder,string $class="form-control"){

$element = ' <div class="form-group">
                        <input type="'.$type.'" class="'.$class.'" name="'.$name.'" placeholder="'.$placeholder.'">
                    </div>';

                    echo $element;

}


function checkdb($con){


$query = "SELECT * FROM users";

$result = pg_query($con, $query);

return $result;

}

function insertdb($con, $fullname, $email, $username, $password){

    $query = "INSERT INTO users(
        fullname, email, username, password) VALUES('$fullname', '$email', '$username', '$password');
        ";

    $result = pg_query($con, $query);

    return $result;
}
