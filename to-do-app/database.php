<?php
function make_connection() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "todoapp";

    $con = new mysqli($host, $user, $password, $dbname);
    if ($con->connect_error) {
        die("Database connection failed: " . $con->connect_error);
    }
    return $con;
}

// Get all incomplete tasks
function get_tasks() {
    $con = make_connection();
    $query = "SELECT id, task FROM tasks WHERE status = 0";
    return $con->query($query);
}

// Add new task
function add_task($task) {
    $con = make_connection();
    $task = $con->real_escape_string($task);
    $query = "INSERT INTO tasks (task, status) VALUES ('$task', 0)";
    $con->query($query);
}

// Remove task
function remove_task($id) {
    $con = make_connection();
    $id = intval($id);
    $query = "DELETE FROM tasks WHERE id = $id";
    return $con->query($query);
}

// Mark task as completed
function task_status($id) {
    $con = make_connection();
    $id = intval($id);
    $query = "UPDATE tasks SET status = 1 WHERE id = $id";
    return $con->query($query);
}
?>
