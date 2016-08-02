<?php
require_once 'entities/CourseEntity.php';

class SectionModel {

    function getSectionBycode($code) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT sec FROM section WHERE course_code='$code'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $sections = array();

        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($sections, $row['sec']);
        }
        mysqli_close($con);
        return $sections;
    }
}
