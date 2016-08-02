<?php

require_once 'entities/CourseEntity.php';

class CourseModel {
     
    function getCourseList(){
        include 'Credentials.php';
        
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = 'SELECT * FROM course ORDER BY name';
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $courseArray = array();
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $course = new CourseEntity($row['code'], $row['name']);
            array_push($courseArray, $course);
        }
        
        mysqli_close($con);
        return $courseArray;
    }
    
    function getCourseNameBycode($code){
        include 'Credentials.php';
        
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT name FROM course WHERE code='$code'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
        while ($row = mysqli_fetch_assoc($result)) {
            $courseName = $row['name'];
        }
        
        mysqli_close($con);
        return $courseName;
    }
}