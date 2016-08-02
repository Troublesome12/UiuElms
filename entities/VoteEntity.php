<?php

class VoteEntity {
    
    public $student_id;
    public $faculty_id;
    public $helpfulness;
    public $clarity;
    public $easiness;
    
    function __construct($student_id, $faculty_id, $helpfulness, $clarity, $easiness) {
        $this->student_id = $student_id;
        $this->faculty_id = $faculty_id;
        $this->helpfulness = $helpfulness;
        $this->clarity = $clarity;
        $this->easiness = $easiness;
    }  
}
