<?php

interface parent1{

function calc($a,$b);
}

interface parent2{

    function sub($c,$d);
}


class ChildClass implements parent1,parent2{
function calc($a,$b){
    echo $a+$b;
}

function sub($c,$d){

    echo $c-$d;
}


}

$test=new ChildClass();
$test->calc(5,2);
 echo "<br>";
$test->sub(5,2);

?>