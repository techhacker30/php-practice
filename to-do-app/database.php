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

function get_tasks(){
    $con = make_connection();
    $query = "SELECT id,task from tasks WHERE status='NOT COMPLITE'";
    $result = $con->query($query);
    // echo "$result";
    return $result;
}
function add_task($task){
    // echo "Adding Your Tas k".$task;
    $con = make_connection();
    $query = "INSERT INTO tasks(id, task, status) VALUE(NULL, '$task', '0')";
    $con->query($query);
}
function task_status(){
    // echo "now in task status status";
    $res = 'result form task';
    $con = make_connection();
    $query = "UPDATE tasks SET status=1 WHERE id=10";
    // echo "$id";
    $result = $con->query($query);
    // echo "$result";
    return $result;
    // return $res;
}
?>