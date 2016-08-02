<?php

require_once 'entities/StudentEntity.php';

class StudentModel {

    function checkStudent($email, $password) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM student WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        mysqli_close($con);
        return $count;
    }

    function checkStudentId($id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM student WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        mysqli_close($con);
        return $count;
    }

    function checkStudentEmail($email) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM student WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        mysqli_close($con);
        return $count;
    }

    function getStudentId($email) {
        include 'Credentials.php';
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT id FROM student WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        }

        mysqli_close($con);
        return $id;
    }

    function getStudentList() {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = 'SELECT * FROM student ORDER BY id';
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $studentArray = array();

        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];

            $student = new StudentEntity($id, $name, $email, $image, $password);
            array_push($studentArray, $student);
        }

        mysqli_close($con);
        return $studentArray;
    }

    function getStudentInfo($email) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM student WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];

            $student = new StudentEntity($id, $name, $email, $image, $password);
        }

        mysqli_close($con);
        return $student;
    }

    function updateStudentInfo($student) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "UPDATE student SET name='$student->name', email='$student->email', image='$student->image', password='$student->password'  WHERE id='$student->id'";

        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }

    function deleteStudentById($student_id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "DELETE FROM student WHERE id='$student_id'";

        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }

    function addStudent($id, $name, $password, $email) {
        include 'Credentials.php';

        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = sprintf("INSERT INTO student (id, name, password, email)
                        VALUES ('%s', '%s', '%s', '%s')",
                        mysqli_real_escape_string($con, $id),
                        mysqli_real_escape_string($con, $name),
                        mysqli_real_escape_string($con, $password),
                        mysqli_real_escape_string($con, $email));
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
        return 1;
    }

    function getImageById($id){
        include 'Credentials.php';
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT image FROM student WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $image = $row['image'];
        }
        
        return $image;     
    }
}
