<?php
class Myclass{
   public function myfunction(){
        return __CLASS__ ;
     } 
}

$obj=new Myclass();
echo $obj->myfunction() . "<br>";



 echo "Number of Line is:"  . __LINE__ . "<br>";

 echo "Full path of the file is :" . __FILE__  . "<br>";

 echo "Full path of the directory is :" . __DIR__ . "<br>";


?>