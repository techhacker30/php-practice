<?php include("database.php"); ?>
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
            <ol class="list">
                <?php
                    $tasklist = get_tasks();
                    while ($row = $tasklist->fetch_assoc()) {
                ?>
                <li>
                    <?php echo htmlspecialchars($row['task']); ?>
                    <div>
                        <button type="submit" name="remove" value="<?php echo $row['id']; ?>">Remove</button>
                        <button type="submit" name="complite" value="<?php echo $row['id']; ?>">Complete</button>
                    </div>
                </li>
                <?php } ?>
            </ol>
        </div>

        <div class="button-container">
            <button name="reset" type="reset">Reset</button>
            <input name="task" type="text" id="addtask" placeholder="Enter your task here">
            <button name="add" type="submit">Add Task</button>
        </div>
    </form>
</div>
</body>
</html>
