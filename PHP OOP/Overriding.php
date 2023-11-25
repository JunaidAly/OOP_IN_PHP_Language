<?php
class Base{
public $name;

public function calc($a,$b){
return $a*$b;

}

}

class Derived extends Base{
public $name;
public function calc($a,$b){
    return $a+$b;
    
    }


}
$test=new Derived();
echo $test->name="Junaid Ali" . "</br>";
echo $test->calc(5,2);

?>