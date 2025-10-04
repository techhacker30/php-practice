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
    return $con;
}

function add_task($task){
    // echo "Adding Your Tas k".$task;
    $con = make_connection();
    $query = "INSERT INTO tasks(id, task, status) VALUE(NULL, '$task', 'Not Complited')";
    $con->query($query);
}
function remove_task($id){

}
?>