<?php

if(isset($_POST['faculty_id'])){
    require_once 'models/facultyModel.php';
    $facultyModel = new FacultyModel();
    $facultyModel->deleteFacultyById($_POST['faculty_id']);
    echo 'success';
    
} else if(isset($_POST['student_id'])){
    require_once 'models/StudentModel.php';
    $studentModel = new StudentModel();
    $studentModel->deleteStudentById($_POST['student_id']);
    echo 'success';
    
} else if(isset($_POST['admin_id'])){
    require_once 'models/adminModel.php';
    $adminModel = new AdminModel();
    $adminModel->deleteAdminById($_POST['admin_id']);
    echo 'success';
    
}