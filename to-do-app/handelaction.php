<?php
//  import database 
include("database.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["add"])){
        $task = $_POST['task'];
        // echo "added ".$task;
        if($_POST['task']){
            add_task($_POST['task']);
        }
    }
    if(isset($_POST["remove"])){
        // echo "remove";
        if($_POST['remove']){
            remove_task($_POST['remove']);
        }
    }
    if(isset($_POST["complite"])){
        // echo "complite";
        if($_POST['complite']){
            task_status($_POST['complite']);
        }
    }
    header("Location: index.html");
}
?>