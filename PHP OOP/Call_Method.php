<?php

class abc{
private  $first_name;
private $last_name;

private function getname($fname, $lname){
$this->$first_name = $fname;
$this->$last_name = $lname;

}

public function __call($method, $args){
   if(method_exists($this, $method)){

    call_user_func_array([$this, $method],$args);
   }
   else{
    echo "This is non existing method: $method ";
   }


}
}
$test=new  abc();
$test->getname("Junaid ","Ali");

?>