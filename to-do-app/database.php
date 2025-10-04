<?php

function make_connection()
{    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "todoapp";

    $con =  new mysqli($host, $user, $password, $dbname);
    if($con->connect_error){
        echo "Ther is an erro while connecting";
    }
}
?>