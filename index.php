<?php

session_start();

if(!isset($_SESSION['email'])  && !isset($_COOKIE['email'])){
    header("Location:log.php");
    exit;
}
else if(isset($_COOKIE['email'])){
    $_SESSION['email'] = $_COOKIE['email'];
    $_SESSION['status'] = $_COOKIE['status'];
}
//    session_destroy();
//

include './templates/template.php';

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 'home')
        include './home.php';
    else if ($_GET['mode'] == 'courseList')
        include './courseList.php';
    else if ($_GET['mode'] == 'course')
        include './course.php';
    else if ($_GET['mode'] == 'about')
        include './about.php';
    else if ($_GET['mode'] == 'blog')
        include './blog.php';
    else if ($_GET['mode'] == 'contact')
        include './contact.php';
    else if ($_GET['mode'] == 'rate')
        include './rate.php';
    else if ($_GET['mode'] == 'management')
        include './management.php';
    else if ($_GET['mode'] == 'account')
        include './userAccount.php';
} else {
    include './home.php';   //first time when the website runs
}

include './templates/footer.php';