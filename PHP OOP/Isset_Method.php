<?php
class student{

    public $course;
    private $firstname;
    private $lastname;
    private $details=['name'=>'Ali Ahmed','Age'=>'20'];

    public function setName($fname,$lname){

        $this->firstname=$fname;
        $this->lastname=$lname;
    }

    public function __isset($name){
        echo isset($this->details[$name]);
    }
}

$test=new student();
//$test->setName("Junaid","Ali");

echo isset($test->name);
?>