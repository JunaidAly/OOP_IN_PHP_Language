<?php
class abc{
public $course="PHP";
private $firstname;
private $lastname;

public function SetName($fname,$lname){
$this->firstname=$fname;
$this->lastname=$lname;


}
public function __unset($property){

    unset($this->$property);

}

}

$test=new abc();
$test->SetName("Junaid","Ali");
unset($test->lastname);
print_r($test);
?>