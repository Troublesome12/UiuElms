<?php

require_once 'entities/SkillEntity.php';

class SkillModel {
    
    function getSkillById($id){
        include 'Credentials.php';
        
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM skill WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $faculty_id = $row['id'];
            $voter = $row['voter'];
            $helpfulness = $row['helpfulness']/$voter;
            $clarity = $row['clarity']/$voter;
            $easiness = $row['easiness']/$voter;
        }
        
        $skill = new SkillEntity($faculty_id, $helpfulness, $clarity, $easiness, $voter);
        mysqli_close($con);
        return $skill;
    }
    
    function addSkill($skill){
        include 'Credentials.php';
        
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "UPDATE skill SET helpfulness=helpfulness + '$skill->helpfulness', clarity=clarity + '$skill->clarity', easiness=easiness + '$skill->easiness', voter=voter + '$skill->voter' WHERE id='$skill->faculty_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
}