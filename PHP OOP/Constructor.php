<?php
class Person{
public $name;
public $Age;

function __construct($name="Asif",$Age=20){
    $this->name=$name;
    $this->Age=$Age;
}

function show(){
    echo $this->name ."  -  ". $this->Age ."\n";

}

}
$p1 = new person();
$p2 = new person("Naeem",20);
$p3 = new person("Junaid Ali",40);

$p1->show();
$p2->show();
$p3->show();

?>