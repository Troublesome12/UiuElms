<?php

require_once 'entities/FacultyEntity.php';

class FacultyModel {

    function getFacultyList() {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = 'SELECT * FROM faculty ORDER BY id';
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $facultyArray = array();

        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $designation = $row['designation'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];

            $faculty = new FacultyEntity($id, $name, $designation, $email, $image, $password);
            array_push($facultyArray, $faculty);
        }

        mysqli_close($con);
        return $facultyArray;
    }

    function checkFaculty($email, $password) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM faculty WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        mysqli_close($con);
        return $count;
    }

    function getFacultyName($faculty_id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT name FROM faculty WHERE id='$faculty_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
        }

        mysqli_close($con);
        return $name;
    }
    
    function getFacultyInfo($email) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM faculty WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $designation = $row['designation'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];

            $faculty = new FacultyEntity($id, $name, $designation, $email, $image, $password);
        }

        mysqli_close($con);
        return $faculty;
    }

    function addFaculty($faculty) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = sprintf("INSERT INTO faculty (name, designation, email, password) 
                    VALUES(%s, %s, %s, %s)", 
                    mysqli_real_escape_string($con, $faculty->name),
                    mysqli_real_escape_string($con, $faculty->designation),
                    mysqli_real_escape_string($con, $faculty->email),
                    mysqli_real_escape_string($con, $faculty->password));
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
    
    function deleteFacultyById($faculty_id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "DELETE FROM faculty WHERE id='$faculty_id'";
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
    
    function updateFacultyInfo($faculty){
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "UPDATE faculty SET name='$faculty->name', designation='$faculty->designation', email='$faculty->email', image='$faculty->image', password='$faculty->password'  WHERE id='$faculty->id'";
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
    
    function getImageById($id){
        include 'Credentials.php';
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT image FROM faculty WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $image = $row['image'];
        }
        
        return $image;     
    }
}
