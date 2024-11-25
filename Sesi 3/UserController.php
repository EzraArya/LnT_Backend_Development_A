<?php 
    session_start();

    if($_POST['action'] == 'register') {
        // Connect database
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION["USERNAME"] = $username;
        $_SESSION["PASSWORD"] = $password;

        header("Location: /lntbackend/home.php");
    }

    if($_POST['action'] == "login") {
        $username = $_SESSION['USERNAME'];
        $password = $_SESSION["PASSWORD"];

        if ($_POST['username'] != $username) {
            $_SESSION["ERROR"] = "Incorrect username";
            header("Location: /lntbackend/login.php");
            return;
        }

        if ($_POST['password'] != $password) {
            $_SESSION["ERROR"] = "Incorrect password";
            header("Location: /lntbackend/login.php");
            return;
        }

        header("Location: /lntbackend/home.php");
    }

?>