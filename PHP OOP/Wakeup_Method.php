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

public function __wakeup(){
    echo "This is unsearlized method. ";

}
}
$obj=new  abc();
$obj->SetName("Junaid","Ali");
$srl=serialize($obj);

$us=unserialize($srl);
print_r($us);


?>