<?php
class Base {
protected static  $name="Junaid";

public  function show(){
     echo  self::$name . " ";
     echo  static::$name;
}

}

class derived extends Base{

    protected static  $name="Ali";
}

$test=new derived;
$test->show();
?>