<?php
class Base{
protected $name;

public function __construct($n){
$this->name=$n;

}

protected function show(){
echo "Your Name is :" . $this->name . "</br>";

}

}

class Derived extends Base{
    public function Get(){
        echo "Your Name is :" . $this->name . "</br>";
        
        }

}

$test=new Derived("Junaid Ali");
$test->Get();

?>