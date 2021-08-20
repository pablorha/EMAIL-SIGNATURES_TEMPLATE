<?php

class Employee {

    public $name, $surname, $job, $image, $email, $phone;

    public function __construct($name, $surname, $job, $image, $email, $phone)
    {
        $this->name = strtolower($name);
        $this->surname = strtolower($surname);
        $this->job = strtolower($job);
        $this->iamge = strtolower($image);
        $this->email = strtolower($email);
        $this->phone = strtolower($phone);
    }

    public function setName($name){
        $this->name = strtolower($name);
    }

    public function setSurname($surname){
        $this->surname = strtolower($surname);
    }

    public function setJob($job){
        $this->job = strtolower($job);
    }

    public function setImage($image){
        $this->image = strtolower($image);
    }

    public function setEmail($email){
        $this->email = strtolower($email);
    }

    public function setPhone($phone){
        $this->phone = strtolower($phone);
    }

}