<?php

require_once 'entities/VoteEntity.php';

class VoteModel {

    function getVote($student_id, $faculty_id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM vote WHERE student_id='$student_id' AND faculty_id='$faculty_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            //Get data from database
            while ($row = mysqli_fetch_assoc($result)) {
                $helpfulness = $row['helpfulness'];
                $clarity = $row['clarity'];
                $easiness = $row['easiness'];
            }

            $vote = new VoteEntity($student_id, $faculty_id, $helpfulness, $clarity, $easiness);
            mysqli_close($con);
            return $vote;
        }
        mysqli_close($con);
        return NULL;
    }
    
    function insertVote($vote) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "INSERT INTO vote VALUES ('$vote->student_id', '$vote->faculty_id', '$vote->helpfulness', '$vote->clarity', '$vote->easiness')";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
    
    function updateVote($vote) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "UPDATE vote SET helpfulness='$vote->helpfulness', clarity='$vote->clarity', easiness='$vote->easiness' WHERE student_id='$vote->student_id' AND faculty_id='$vote->faculty_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
}