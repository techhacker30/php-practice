<?php
//  import database 
include("database.php");
// $tasks = get_tasks();
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
    if(isset($_POST['complite'])){
        // echo $_POST['complite'];
        // echo "request going for hdp";
        // if($_POST['complite']){
            $res = task_status();
            echo $res;
        // }
        echo "come back";
    }
    // header("Location: index.php");
}
?>