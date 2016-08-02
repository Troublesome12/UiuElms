<?php

class StudentEntity {
    public $id;
    public $name;
    public $email;
    public $image;
    public $password;
    
    function __construct($id, $name, $email, $image, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->image = $image;
        $this->password = $password;
    }
}