<?php
trait hello{
private function sayhello(){
echo "Hello from Hello trait. \n";

}
}

trait hi{
    public function sayhello(){
        echo "Say hello from hi trait .\n";
    }
}

 class Base{
use hello;
public function sayhello(){
    echo "Say hello from Base class. \n";
}


}

class Derived extends Base{
use hello,hi{
hello::sayhello as public;
hello::sayhello insteadOf hi;
//hi::sayhello as sayhi;


}
//public function sayhello(){
  //  echo "Say hello from from derived class .\n";
//}
}

$test=new Base();
$test->sayhello();
?>