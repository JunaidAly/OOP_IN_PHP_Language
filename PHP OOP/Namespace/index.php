<?php


require 'product.php';
require 'testing.php';


function wow(){
 
    echo "wow from index file. <br>";

}

use pro\v1\command as cmd;

$obj1=new cmd\product();

$obj2=new test\product();

wow();

test\wow();

?>