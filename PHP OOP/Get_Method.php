<?php
class abc{
private $data=["Name"=>"Junaid Ali","Age"=>"20","Qualification"=>"BSCS"];


public function __get($key){
if (array_key_exists($key,$this->data)){

    return $this->data[$key];

}
else {
    return "This key ($key) is not defined";
}
}


}

$test=new abc();
//print_r($test->data);
echo $test->Name;


?>