<?php
class abc{
public $course="PHP";
private $firstname;
private $lastname;


public function SetName($fname,$lname){
$this->firstname=$fname;
$this->lastname=$lname;

}
public function __sleep(){
    return array('firstname', 'firstname');

}
}
$obj=new  abc();
$obj->SetName("Junaid","Ali");
$srl=serialize($obj);
echo $srl;


?>