<?php
class Base{
    public static $name="Junaid Ali";
    /*public static function show(){
       echo  self::$name;
    }
    public function __construct($n){

        self::$name=$n;
    }*/
}

class derived extends Base{
    public static function show(){
        echo  parent::$name;
     }
   

}

$test=new derived();
//Base ::$name;
$test->show();

?>