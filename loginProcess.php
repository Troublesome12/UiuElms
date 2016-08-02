<?php

session_start();

//student has sent request for login
if (isset($_POST['student_login_email']) && isset($_POST['student_login_password'])) {
    $email = $_POST['student_login_email'];
    $password = $_POST['student_login_password'];
    $remember = $_POST['student_login_remember'];

    require_once 'models/studentModel.php';

    $studentModel = new StudentModel();
    $count = $studentModel->checkStudent($email, $password);

    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = 'student';
        if ($remember == 1) {
            $expiry = time() + (86400 * 30);    //30 days
            setcookie('email', $email, $expiry, "/", "", "", TRUE);
            setcookie('status', 'student', $expiry, "/", "", "", TRUE);
        }
        echo $count;
    } else
        echo 0;
}

//faculty has sent request for login
else if (isset($_POST['faculty_login_email']) && isset($_POST['faculty_login_password'])) {
    $email = $_POST['faculty_login_email'];
    $password = $_POST['faculty_login_password'];
    $remember = $_POST['faculty_login_remember'];

    require_once 'models/FacultyModel.php';

    $facultyModel = new FacultyModel();
    $count = $facultyModel->checkFaculty($email, $password);

    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = 'faculty';
        if ($remember == 1) {
            $expiry = time() + (86400 * 30);    //30 days
            setcookie('email', $email, $expiry, "/", "", "", TRUE);
            setcookie('status', 'faculty', $expiry, "/", "", "", TRUE);
        }
        echo $count;
    } else
        echo 0;
}

//admin has sent request for login
else if (isset($_POST['admin_login_email']) && isset($_POST['admin_login_password'])) {
    $email = $_POST['admin_login_email'];
    $password = $_POST['admin_login_password'];
    $remember = $_POST['admin_login_remember'];
    require_once 'models/adminModel.php';

    $adminModel = new AdminModel();
    $count = $adminModel->checkAdmin($email, $password);

    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = 'admin';
        if ($remember == 1) {
            $expiry = time() + (86400 * 1);    //1 day
            setcookie('email', $email, $expiry, "/");
            setcookie('status', 'admin', $expiry, "/");
        }
        echo $count;
    } else
        echo 0;
}

else if(isset($_POST['student_reg_name']) && isset($_POST['student_reg_id']) && isset($_POST['student_reg_password']) && isset($_POST['student_reg_email'])){
    $id = $_POST['student_reg_id'];
    $name = $_POST['student_reg_name'];
    $password = $_POST['student_reg_password'];
    $email = $_POST['student_reg_email'];
    
    require_once 'models/StudentModel.php';
    
    $studentModel = new StudentModel();
    $count = $studentModel->addStudent($id, $name, $password, $email);
    echo $count; 
}

else if(isset($_POST['student_reg_id'])){
    require_once 'models/StudentModel.php';
    $studentModel = new StudentModel();
    $count = $studentModel->checkStudentId($_POST['student_reg_id']); 
    echo $count;
}

else if(isset($_POST['student_reg_email'])){
    require_once 'models/StudentModel.php';
    $studentModel = new StudentModel();
    $count = $studentModel->checkStudentEmail($_POST['student_reg_email']);
    echo $count; 
}