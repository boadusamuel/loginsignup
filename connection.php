<?php

$host = "localhost";
$user = "postgres";
$password = "F@rmdog222";
$db_name = "panther";
$port = "";

$db_connection = pg_connect("host=$host dbname=$db_name user=$user password=$password");


if($db_connection){

    echo "Connection Okay";
}else{

    echo "whoops";
}