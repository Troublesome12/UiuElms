<?php

class FacultyEntity {
    public $id;
    public $name;
    public $designation;
    public $email;
    public $image;
    public $password;
    
    function __construct($id, $name, $designation, $email, $image, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->designation = $designation;
        $this->email = $email;
        $this->image = $image;
        $this->password = $password;
    }    
}