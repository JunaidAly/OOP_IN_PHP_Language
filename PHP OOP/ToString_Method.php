<?php
class abc{
 
    public function __tostring(){
        return "Cant print the object of class:" .get_class($this);
    }

}

$test=new abc();
echo $test;
?>