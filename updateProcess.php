<?php

session_start();

if (isset($_POST['submit'])) {
    //Check if the file formet is valid
    $fileType = $_FILES['file']['type'];

    if (($fileType == "image/gif") ||
            ($fileType == "image/jpg") ||
            ($fileType == "image/jpeg") ||
            ($fileType == "image/png")) {

        //check if the file already exists
        if (file_exists("img/user/" . $_FILES['file']['name']))
            echo 'File already exists!';

        else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'img/user/' . $_FILES['file']['name']);
        }
    }

    $image = $_FILES['file']['name'];

    if (strlen($image) < 4) {
        if ($_SESSION['status'] == 'faculty') {
            require_once 'models/FacultyModel.php';
            $facultyModel = new facultyModel();
            $image = $facultyModel->getImageById($_POST['id']);
            
        } else if ($_SESSION['status'] == 'student') {
            require_once 'models/StudentModel.php';
            $studentModel = new StudentModel();
            $image = $studentModel->getImageById($_POST['id']);
            
        } else if ($_SESSION['status'] == 'admin') {
            require_once 'models/AdminModel.php';
            $adminModel = new AdminModel();
            $image = $adminModel->getImageById($_POST['id']);
        }
    }

    if ($_SESSION['status'] == 'faculty') {
        require_once 'entities/FacultyEntity.php';
        require_once 'models/FacultyModel.php';

        $id = $_POST['id'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $faculty = new FacultyEntity($id, $name, $designation, $email, $image, $password);

        $facultyModel = new FacultyModel();
        $facultyModel->updateFacultyInfo($faculty);
    } else if ($_SESSION['status'] == 'student') {
        require_once 'entities/StudentEntity.php';
        require_once 'models/StudentModel.php';

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $student = new StudentEntity($id, $name, $email, $image, $password);
        $studentModel = new StudentModel();
        $studentModel->updateStudentInfo($student);
    } else {
        require_once 'entities/AdminEntity.php';
        require_once 'models/AdminModel.php';

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $admin = new AdminEntity($id, $name, $password, $email, $image);
        $adminModel = new AdminModel();
        $adminModel->updateAdminInfo($admin);
    }

    header("Location:index.php");
    exit;
}