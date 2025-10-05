<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="mainbox">
        <form action="handelaction.php" method="post">
        <header>TO-DO APPLICATION</header>
        <div class="list-container">
            <ol class="list" name="list">
                 <?php
                    $tasklist = get_tasks();
                    while($row=$tasklist->fetch_assoc()) {
                        // echo "";
                    
                ?>
                <li><?php echo $row['id']."  ".$row['task']; ?><div><button type="submit" class="rm" name="remove">Remove</button><button type="submit" name="complite">COMPLITE</button></div></li>
                <!-- <li>SECOND TASK <div><button type="submit" class="rm" name="remove">Remove</button><button type="submit" name="complite">COMPLITE</button></div></li> -->
                <?php } ?>
            </ol>

        </div>
        <div class="button-container">
            <button name="reset" type="reset">Reset</button>
            <input name="task" type="text" id="addtask" placeholder="Here Enter Your Task" >
            <button name="add" type="submit" onclick="addtask()">ADD TASK</button>
        </div>
        </form>
    </div>


    <script src="script.js"></script>
</body>

</html>