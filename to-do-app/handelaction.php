<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"]) && !empty($_POST["task"])) {
        add_task($_POST["task"]);
    }

    if (isset($_POST["remove"])) {
        remove_task($_POST["remove"]);
    }

    if (isset($_POST["complite"])) {
        task_status($_POST["complite"]);
    }

    header("Location: index.php");
    exit;
}
?>
