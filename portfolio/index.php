<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "test";

    $con = new mysqli($server, $user, $password, $db);
    $name = $_GET['name'];
    $birth = $_GET['bdate'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    
    echo "<br>Thi is ".$name."<br>$birth<br>$email<br>$phone<br>";

    echo "<input type='text' value='Hello $name'>"
?>
