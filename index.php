<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPHPFILE</title>
</head>
<body>
    <?php
        echo "This is my first php file";
    ?>
</body>
</html>
=======
<?php
    $name = $_GET['name'];
    $birth = $_GET['bdate'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    
    echo "<br>Thi is ".$name."<br>$birth<br>$email<br>$phone<br>";

    echo "<input type='text' value='Hello $name'>"
?>
