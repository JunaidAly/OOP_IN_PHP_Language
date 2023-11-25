<?php
class abc{

    private $name;

    public function display(){
        echo $this->name;
    }

    public function __get($property){

        echo "You are trying to access private or non existing property ($property) <br>";
    }

    public function __set($property,$value){
        if(property_exists($this,$property)){

            $this->$property=$value;
        }
        else{
            echo "property does not exist : $property";
        }

    }

}

$test=new abc();
//$test->name="Junaid Ali";
$test->Age="20";
$test->display();

?>