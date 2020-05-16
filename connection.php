<?php



function connected()
{

    $conn = pg_connect("host=ec2-34-206-252-187.compute-1.amazonaws.com port=5432 dbname=d2vdk81jnuo24v user=zfntnyjoanzebb password=634fd3b442c1c6ac93812ef028a8f3fe10485ca84494f39bbf26285a88ea3fa0");

    if ($conn) {

        return $conn;
    }
}
