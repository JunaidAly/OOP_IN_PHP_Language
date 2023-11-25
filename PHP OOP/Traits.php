<?php
trait A{
    public function sayhello(){
        echo "Hello Everyone" . "<br>";
    }
    public function sayhi(){
        echo "Hi Everyone\n" ."<br>";
    }

}
trait B{
    public function saybye(){
        echo "Bye Everyone\n" ."<br>";
    }
}

 class Base{
    use A,B;
    

}
class derived{
    use A,B;
}

$test=new Base();
$test1=new derived();

$test->sayhello();
$test->sayhi();
$test->saybye();

$test1->sayhello();
$test1->sayhi();
$test1->saybye();
?>