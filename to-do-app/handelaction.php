<!-- import database -->
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["add"])){
        $task = $_POST['task'];
        echo "added ".$task;
    }
    if(isset($_POST["remove"])){
        echo "remove";
    }
    if(isset($_POST["complite"])){
        echo "complite";
    }
}
?>