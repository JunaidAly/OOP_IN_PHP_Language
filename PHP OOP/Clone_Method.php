<?php
class student{
public $name;
public $course;

public function __construct($n){

    $this->name=$n;
}


public function SetName(course $c){

    $this->course=$c;
}

public function __clone(){
$this->course = clone $this->course;
 
}
}

class course{

    public $cname;
    public function __construct($cn){
        $this->cname= $cn;
    }
}

$student1=new student('Junaid Ali');
$course1=new course('PHP');

$student1->SetName($course1);

$student2= clone $student1;

$student2->name = 'Ali Ahmed';
$student2->course->cname= 'Python';
print_r($student1);

print_r($student2);
?>