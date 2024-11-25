<?php 
    session_start();

    $_SESSION["TASKS"][] = $_POST["task-name"];
    header("Location: todo.php")
?>