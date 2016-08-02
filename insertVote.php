<?php

require_once 'entities/SkillEntity.php';
require_once 'entities/VoteEntity.php';
require_once 'models/VoteModel.php';
require_once 'models/SkillModel.php';

if (isset($_POST['student_id']) && isset($_POST['faculty_id'])) {
    $student_id = $_POST['student_id'];
    $faculty_id = $_POST['faculty_id'];
    $helpfulness = $_POST['helpfulness'];
    $clarity = $_POST['clarity'];
    $easiness = $_POST['easiness'];
    $first_time_voting = $_POST['first_time_voting'];
    $vote = new VoteEntity($student_id, $faculty_id, $helpfulness, $clarity, $easiness);
    $voteModel = new VoteModel();
    $skillModel = new SkillModel();
    
    
    if ($first_time_voting) {
        $voteModel->insertVote($vote);
        $skill = new SkillEntity($faculty_id, $helpfulness, $clarity, $easiness, 1);
        $skillModel->addSkill($skill);
        echo "inserted";
    } else {
        $previous_vote = $voteModel->getVote($student_id, $faculty_id);
        $previous_helpfulness = $previous_vote->helpfulness;
        $previous_clarity = $previous_vote->clarity;
        $previous_easiness = $previous_vote->easiness;
        
        $voteModel->updateVote($vote);
        $skill = new SkillEntity($faculty_id, $helpfulness-$previous_helpfulness, $clarity-$previous_clarity, $easiness-$previous_easiness, 0);
        $skillModel->addSkill($skill);
        echo "updated";
    }
}