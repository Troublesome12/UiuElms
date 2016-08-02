<?php

class AdminEntity {

    public $id;
    public $name;
    public $password;
    public $email;
    public $image;

    function __construct($id, $name, $password, $email, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->image = $image;
    }
}
