<?php

class SkillEntity {
    public $helpfulness;
    public $clarity;
    public $easiness;
    public $voter;
    public $faculty_id;
            
    function __construct($faculty_id, $helpfulness, $clarity, $easiness, $voter) {
        $this->faculty_id = $faculty_id;
        $this->helpfulness = $helpfulness;
        $this->clarity = $clarity;
        $this->easiness = $easiness;
        $this->voter = $voter;
    }
}