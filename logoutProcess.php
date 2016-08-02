<?php

session_start();

if (isset($_SESSION['email']) || isset($_SESSION['status']))
    session_destroy();

if (isset($_COOKIE['email']) || isset($_COOKIE['status'])) {
    setcookie('email', '', time()- 36000, "/");
    setcookie('status', '', time()- 36000, "/");
}

header("Location:index.php");
exit;