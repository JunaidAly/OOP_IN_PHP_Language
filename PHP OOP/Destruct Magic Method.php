<?php
class abc{


    private $conn;

    public function __construct(){

        echo "This is constructor function <br>";

        $this->conn=mysqli_connect();
    }

    public function Hello(){

        echo "Hello everyone  <br>";
    }

    public function __destruct(){

        echo "This is destruct function  <br>";

        mysqli_close($this->conn);
    }
}

$test=new abc();

$test->Hello();

?>