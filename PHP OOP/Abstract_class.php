<?php
abstract  class Parent_class{
protected $name;

abstract protected function calc($a,$b);

}

 class Child_class extends Parent_class{
public $name;
public function calc($c,$d){
    echo  $c+$d . "</br>";
}

}
$test=new Child_class();
$test->calc(2,7);
echo $test->name="Junaid Ali";

?>